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