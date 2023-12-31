<?php
use App\Models\Cmspage;

function cartCount()
{
     $url = config('global.api')."/getcart";
        $user_id= session()->get('user_id');
        $token= 'Bearer '.session()->get('token');

        if($user_id){
           // return $user_id;
            $response = Http::withHeaders([
                'Authorization' => $token
            ])->post($url, [
                'user_id' => $user_id
            ]);
           
            
            $data=$response['data'];
          return $data;
        }

        else{
           $carts = session()->get('cart',[]);

            $data = $carts;
                return $data;
          //  return $data;
        }

}
function categoryList()
{
    $url = config('global.api')."/category";
    $response = Http::get($url);
    if($response->successful())
    {
    return $response->object()->data;
    }
    return [];
}
function topRatedProducts()
{
    $url = config('global.api')."/top-rated-products";
    $response = Http::post($url,['category_id'=>request()->category_id]);
    if($response->successful())
    {
    return $response->object()->top_rated_products;
    }
    return [];
}
function CommonData()
{
    $url = config('global.api')."/getcommon-fileds";
      $response = Http::get($url);
    if($response->successful())
    {
    return $response->object()->data;
    }
    return [];
}
function CmsPage()
{
    $url = config('global.api')."/cmspages";
      $response = Http::get($url);
    if($response->successful())
    {
    return $response->json();
    }
    return [];
}
function minicart(){

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
            $data = $carts;
        }

    
        return view('layouts.minicart',compact('data'));
    }
    function topOfferCommon($page)
    {
      $url = config('global.api')."/top-offer-common";
            $response = Http::post($url, [
                'page' => $page
            ]);
            if($response->status())
            {
              return $response->object()->data;
            }
            return null;
    }
    function getCommonFields()
    {
        $url = config('global.api')."/cmspages";
        $response = Http::get($url);
       if($response->successful())
       {
        return $response->object();
       }
    }