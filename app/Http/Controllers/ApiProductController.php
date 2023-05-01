<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiProductController extends Controller
{
    //
    public function __construct(){
        $this->url = config('global.api');
    }


    public function productList(Request $request){
        $user_id= session()->get('user_id') ?? '';
        $category_id=$request->category_id ?? '';
        $subcategory_id=$request->subcategory_id ?? '';
        $innersubcategory_id=$request->innersubcategory_id ?? '';
        $search=$request->search ?? '';
        $explore_more=$request->explore_more ?? '';
        $new_arrival=$request->new_arrival ?? '';
        $best_seller=$request->best_seller ?? '';
        $featured_product=$request->featured_product ?? '';
        if($category_id!=''){
          session()->put('category_id',$category_id);
        }
        if($subcategory_id!=''){
          session()->put('subcategory_id',$subcategory_id);
        }
        session()->forget('brand_id');
        $url = $this->url."/products";
        $response = Http::post($url,  [
        'user_id'=>$user_id,
        'category_id' =>$category_id,
        'subcategory_id' =>$subcategory_id,
        'innersubcategory_id'=>$innersubcategory_id,
        'search'=>$search,
        'explore_more'=>$explore_more,
        'new_arrival'=>$new_arrival,
        'best_seller'=>$best_seller,
        'featured_product'=>$featured_product,
        'perpage'=>7
        ]);

         if($response->successful())
       {
          return view('pages.product.productlist',["data"=>$response->object()]);
       }
    }

    public function productGrid(Request $request){
        $user_id= session()->get('user_id') ?? '';
        $category_id=$request->category_id ?? '';
        $subcategory_id=$request->subcategory_id ?? '';
        $innersubcategory_id=$request->innersubcategory_id ?? '';
        $search=$request->search ?? '';
        $explore_more=$request->explore_more ?? '';
        $new_arrival=$request->new_arrival ?? '';
        $best_seller=$request->best_seller ?? '';
        $featured_product=$request->featured_product ?? '';
        if($category_id!=''){
          session()->put('category_id',$category_id);
        }
        if($subcategory_id!=''){
          session()->put('subcategory_id',$subcategory_id);
        }
        session()->forget('brand_id');
        $url = $this->url."/products";
        $response = Http::post($url,  [
        'user_id'=>$user_id,
        'category_id' =>$category_id,
        'subcategory_id' =>$subcategory_id,
        'innersubcategory_id'=>$innersubcategory_id,
        'search'=>$search,
        'explore_more'=>$explore_more,
        'new_arrival'=>$new_arrival,
        'best_seller'=>$best_seller,
        'featured_product'=>$featured_product,
        'perpage'=>18
        ]);

         if($response->successful())
       {
          return view('pages.product.productgrid',["data"=>$response->object()]);
       }
    }
    public function productDetail(Request $request){
        $url = $this->url."/productdetails";
        $response = Http::post($url,  [
        'product_id'=>$request->id,
        'variation_id'=>$request->variation_id,
        'user_id'=>session()->get('user_id')
        ]);
       if($response->successful())
       {
      return view('pages.product.productdetail',["data" =>$response->object()->data,
                                                 'variation'=>$response->object()->variation,
                                                 'related_products'=>$response->object()->related_products]);
      }
    }

    public function searchProduct(Request $request){

      session()->forget('category_id');
      session()->forget('subcategory_id');
      session()->forget('brand_id');

     //return $request;
      $url = $this->url."/searchproducts";
      $user_id= session()->get('user_id') ?? '';

      $response = Http::post($url,  [
      'user_id'=>$user_id,
      'search'=>$request->search
      ]);
       if($response->successful())
       {
          $datas=$response->object()->data;
          $bestsellers=$response->object()->bestsellers;
          $brands=$response->object()->brands;
          $search=$request->search;
          return view('pages.product.searchlist',compact('datas','bestsellers','brands','search'));
       }
    }

    public function BrandProduct(Request $request){
      //return $request;
       $url = $this->url."/brandsproducts";
       $user_id= session()->get('user_id') ?? '';
       session()->forget('category_id');
       session()->forget('subcategory_id');
       session()->put('brand_id',$request->brand_id);

       $response = Http::post($url,  [
       'user_id'=>$user_id,
       'brand_id'=>$request->brand_id
       ]);
      // return $response;
         $datas=$response['data'];
         $bestsellers=$response['bestsellers'];
         $brands=$response['brands'];

        return view('pages.product.productlist',compact('datas','bestsellers','brands'));

     }

     public function reviewAdd(Request $request){

      $url = $this->url."/addratting";
      $user_id= session()->get('user_id');
      $token= 'Bearer '.session()->get('token');

      if($user_id){
       // return $request;

        $response = Http::withHeaders([
          'Authorization' => $token
      ])->post($url, [
          'user_id' => $user_id,
          'vendor_id' => 1,
          'product_id' => $request->product_id,
          'ratting' => $request->rating,
          'comment' => $request->review
      ]);
      return $response;

      }
      else{
        return redirect('/login');

      }

     }

     public function variation_price(Request $request){
      //  dd($request->all());

        $url = $this->url."/variation-price-change";
        $response = Http::post($url,  [
        'product_id'=>$request->product_id,
        'variation'=>$request->variation
        ]);
      //  dd($response);
        // return $response;
         if($response['status']==1){
          return response()->json(['status' => 1,'price'=>$response['data']['discounted_variation_price'],'variation'=>$response['data']['id'],'variation_name'=>$request->variation],200);
         }else{
          return response()->json(['status' => 0,'price'=>0],200);
         }

       }

     public function filter(Request $request){
  //  return $request;
      $user_id= session()->get('user_id') ?? '';
      $cat_id= session()->get('category_id') ?? '';
      $subCat_id= session()->get('subcategory_id') ?? '';
      $brand_id= session()->get('brand_id') ?? '';
      $url = $this->url."/filter";

      $response = Http::post($url,  [
            'user_id' => $user_id,
            'category_id' => $cat_id,
            'subcategory_id' => $subCat_id,
            'innersubcategory_id' => '',
            'type' => $request->sort,
            'brand' => $brand_id
        ]);

        $datas=$response['data'];
        $bestsellers=$response['bestsellers'];
        $brands=$response['brands'];
       // return $datas;
       return view('pages.product.productlist',compact('datas','bestsellers','brands'));
     }


}
