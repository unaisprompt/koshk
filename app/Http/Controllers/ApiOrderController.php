<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApiOrderController extends Controller
{
    public function __construct(){
        $this->url = config('global.api');
    }
    public function checkout(){

        $user_id= session()->get('user_id');
        $token= session()->get('token');
 
         if($user_id && $token){
            $url = $this->url."/getcart";
            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$token
            ])->post($url, [
                'user_id' => $user_id
            ]);
            $data = $response['data'];
            // return $data;
            // dd($this->addressData()['data'][0]);
            if(count($response['data'])){
                $finalData=array(
                "data" => $data,
                "address" => $this->addressData(),
                "first_address"=>$this->addressData()
                );
                return view('pages.order.checkout',compact('finalData'));
            }
            else{
                return redirect('cart');
            }
         }
         else{
            return redirect('/login');

        }
    }

     public function addressData(){
        $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return view('pages.login');
    $url = $this->url."/getaddress"; 
    $token= 'Bearer '.session()->get('token');
    $user_id= session()->get('user_id');
    $response = Http::withHeaders([
            'Authorization' => $token
    ])->post($url,  [
    'user_id'=>$user_id,
        ]);
        $data = $response->json();
    if($response['status']==1){

        return $data = $response->json();
    }
    else{
        return back()->with('error', $response['message']);
    }
       
    }

  public function getAddressEditByOrder(Request $request)
    {
        $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return view('pages.login');
        $url = $this->url."/showAddress"; 
        $token= 'Bearer '.session()->get('token');
        $user_id= session()->get('user_id');
        $response = Http::withHeaders([
                'Authorization' => $token
        ])->post($url,  [
        'user_id'=>$user_id,
        'address_id'=>$request->address_id
            ]);
                    // dd($response);
            $data = $response->json();
        if($response['status']==1){
        return $data;
        }      
    }
    public function order(Request $request){
        $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return view('pages.login');
        $url = $this->url."/order"; 
    $token= 'Bearer '.session()->get('token');
    $user_id= session()->get('user_id');
    $response = Http::withHeaders([
            'Authorization' => $token
    ])->post($url,  [
    'email'=>$request->email_shipping,
    'user_id'=>$user_id,
    'mobile'=>$request->mobile_shipping,
    'full_name'=>$request->first_name_shipping.' '.$request->last_name_shipping ,
    'street_address'=>$request->shipping_address,
    'payment_type'=>$request->payment_type,
        ]);
        $data = $response->json();
        
    if($response['status']==1){
         return view('pages.thankyou.thankyou');
    }
    else{
        return back()->with('error', $response['message']);
    } 

    }
     public function orderCancel(Request $request){
       $user_id= session()->get('user_id');
     $token= session()->get('token');
        if(!$user_id && !$token)
        return view('pages.login');
    $url = $this->url."/cancelorder";
    $tokens= 'Bearer '.session()->get('token');
    $response = Http::withHeaders([
        'Authorization' => $tokens
        ])->post($url,  [
       'user_id'=>$user_id,
       'order_id'=>$request->id,
        'status'=>6
        ]);
       
    $data = $response->json();
       if($response['status']==1){
        return $data;
       }
       else{
           return back()->with('error', $response['message']);
       }

    }

    public function couponAdd(Request $request){
        $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return view('pages.login');

        $url = $this->url."/checkout"; 
        $token= 'Bearer '.session()->get('token');
        $user_id= session()->get('user_id');
        $response = Http::withHeaders([
                'Authorization' => $token
        ])->post($url,  [
        'user_id'=>$user_id,
        'coupon_name'=>$request->coupon
            ]);
                  
       // $data = $response->json();
      if($response['status']==1){
        return response()->json(['status' => 1], 200);
      }
           
    }

    public function couponRemove(Request $request){
        $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return view('pages.login');

        $url = $this->url."/remove_coupon"; 
        $token= 'Bearer '.session()->get('token');
        $user_id= session()->get('user_id');
        $response = Http::withHeaders([
                'Authorization' => $token
        ])->post($url,  [
        'cart_id'=>$request->cart_id
          ]);
                  
      return back();
        }
    public function OrderTracking(Request $request,$orderId)
    {         $user_id= session()->get('user_id');
     $token= session()->get('token');
        if(!$user_id && !$token)
        return view('pages.login');
    $url = $this->url."/trackorder";
    $tokens= 'Bearer '.session()->get('token');
    $orderDetailId = decrypt($orderId);
    $response = Http::withHeaders([
        'Authorization' => $tokens
        ])->post($url,  [
       'user_id'=>$user_id,
       'order_id'=>$orderDetailId 
        ]);
    $data = $response->json();
     // dd($data);
       if($response['status']==1){
        return view('pages.order.order-tracking',compact('data'));
       }
       else{
           return back()->with('error', $response['message']);
       }
    }
}
