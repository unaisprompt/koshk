<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiCartController extends Controller
{
    public function __construct(){
        $this->url = config('global.api');
    }

    public function cart(){

        $url = $this->url."/getcart";
        $user_id= session()->get('user_id');
        $token= 'Bearer '.session()->get('token');
        $loyality_points=0;
        $loyality_discount_applicable=0;
        $aed_to_loality=0;
        if($user_id){
           // return $user_id;
            $response = Http::withHeaders([
                'Authorization' => $token
            ])->post($url, [
                'user_id' => $user_id
            ]);
           
            
            $data=$response['data'];
          $loyality_points=$response['loyality_points'];
          $loyality_discount_applicable=$response['loyality_discount_applicable'];
          $aed_to_loality=$response['aed_to_loality'];
        }

        else{
            $carts = session()->get('cart',[]);
            $data = $carts;
            if($data)
            {
                    $response = Http::post($this->url."/product/stock-check", [
                        'data' => $data
                    ]);
                    if($response->successful())
                    {
                    $data=$response['data'];
                    }

            }
        }
           $product_ids=[];
           foreach($data as $row)
           {
              $product_ids[]=$row['product_id'];
           }
            $response = Http::post($this->url."/product/similar-products", [
                'product_ids' => $product_ids,
                'user_id'=>session()->get('user_id')
            ]);
            $similar_products=[];
            if($response->successful())
            {
             $similar_products=$response->object()->data;
            }
           
        return view('pages.cart',compact('data','similar_products','loyality_points','loyality_discount_applicable','aed_to_loality'));
    }

    public function addToCart(Request $request){

        $url = $this->url."/addtocart";
        $user_id= session()->get('user_id');
        $token= 'Bearer '.session()->get('token');
        $attribute=$request->attribute ?? '';
        $variation=$request->variation ?? '';
        $variationId=$request->variationId ?? '';
        if($user_id){

            $response = Http::withHeaders([
                'Authorization' => $token
            ])->post($url, [
                'user_id' => $user_id,
                'product_id' => $request->product_id,
                'vendor_id' => 1,
                'product_name' => $request->product_name,
                'qty' => $request->qty,
                'price' => $request->price,
                'image' => $request->image,
                'shipping_cost' => $request->shipping_cost,
                'tax' => $request->tax,
                'discount_amount' => 0,
                'attribute' => $attribute,
                'variation' => $variation,
                'variationId' => $variationId

            ]);
           
             return $response->json();

            if($response['status']==1){

                $url1 = $this->url."/getcart";

                $response = Http::withHeaders([
                    'Authorization' => $token
                ])->post($url1, [
                    'user_id' => $user_id
                ]);
               
                
                $data=$response['data'];

               $cartCount=count($data);
                return response()->json(['status' => 1,'cart_count' => $cartCount], 200);


            }
            else{
                return response()->json(['status' => 0,'cart_count' => 0], 200);

            }

           

        }
        else{
            $cart = session()->get('cart', []);
          //  dd($cart);
            if(isset($cart[$request->product_id])) {
                // $qty= $cart[$id]['quantity'];
              //  return $qty;
               $cart[$request->product_id]['qty']++;
    
              
            } else {
                
                $cart[$request->product_id] = [
                    'product_id' => $request->product_id,
                    'vendor_id' => 1,
                    'product_name' => $request->product_name,
                    'qty' => $request->qty,
                    'price' => $request->price,
                    'image_url' => $request->image,
                    'shipping_cost' => $request->shipping_cost,
                    'tax' => $request->tax,
                    'attribute' => $attribute,
                    'variation' => $variation,
                    'variationId' => $variationId
                ];
            }
                 
            session()->put('cart', $cart);
            if(session()->get('cart')){
                $cartCount = count(session()->get('cart'));
            }
            else{
                $cartCount = 0;
            }
          
            return response()->json(['status' => 1,'cart_count' => $cartCount], 200);

        }
     
    }

    public function cartUpdate(Request $request){
        $url = $this->url."/qtyupdate";
        $user_id= session()->get('user_id');
        $token= 'Bearer '.session()->get('token');
        if($user_id){
            $response = Http::withHeaders([
                'Authorization' => $token
            ])->post($url, [
                'cart_id' => $request->cart_id,
                'qty' => $request->qty

            ]);
        }
        else{
            if($request->cart_id && $request->qty){
                $cart = session()->get('cart');
                $cart[$request->cart_id]["qty"] = $request->qty;
                session()->put('cart', $cart);
               // session()->flash('success', 'Cart updated successfully');
            }
        }
        return response()->json(['status' => 1], 200);

       

    }

    public function deleteCart($id){
        $url = $this->url."/deleteproduct";
        $user_id= session()->get('user_id');
        $token= 'Bearer '.session()->get('token');

        if($user_id){
            $response = Http::withHeaders([
                'Authorization' => $token
            ])->post($url, [
                'user_id' => $user_id,
                'cart_id' => $id
            ]);
            
        }
        else{
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }


        }

      //  return $response;
        // $data=$response['data'];
        return redirect('cart');
    }
    public function getCommonPage()
    {
         $url = $this->url."/cmspages";
            $response = Http::get($url, [
                'user_id' => $user_id
            ]);
           
            
            $data=$response['data'];
         //  return $data;
        }
        function cart_ajax(){

        $url = config('global.api')."/getcart";
        $user_id= session()->get('user_id');
        $token= 'Bearer '.session()->get('token');
        $data=[];
        if($user_id){
            $response = Http::withHeaders([
                'Authorization' => $token
            ])->post($url, [
                'user_id' => $user_id
            ]);
            $data=$response['data'];
        }

        else{
            $carts = session()->get('cart',[]);
            if($carts&&is_array($carts))
            $data = array_values($carts);
        }

        return response()->json(["data"=>$data]);
    }
        
    }

