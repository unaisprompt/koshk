<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiWishlistController extends Controller
{
    public function __construct(){
        $this->url = config('global.api');
    }
    public function whishlist(){

      $url = $this->url."/getwishlist";
      $user_id= session()->get('user_id');
      $token= 'Bearer '.session()->get('token');

      if($user_id){
       // return $request;

        $response = Http::withHeaders([
          'Authorization' => $token
      ])->post($url, [
          'user_id' => $user_id,
         
      ]);
     $data =  $response->json();
             if($response['status']==1){
        return view('pages.myaccount.wishlist',compact('data'));
       }    
      }
      else{

        return view('pages.login');
      }
     }

     public function whishlistAdd(Request $request){

      $url = $this->url."/addtowishlist";
      $user_id= session()->get('user_id');
      $token= 'Bearer '.session()->get('token');

      if($user_id){
       // return $request;

        $response = Http::withHeaders([
          'Authorization' => $token
      ])->post($url, [
          'user_id' => $user_id,
          'product_id' => $request->product_id
      ]);
      $data =  $response->json();
      return $data;
           
      }
      else{

        return response()->json(['status' => 0,'message'=>'please login'],200);
    }
 }

     public function whishlistRemove(Request $request){

      $url = $this->url."/removefromwishlist";
      $user_id= session()->get('user_id');
      $token= 'Bearer '.session()->get('token');

      if($user_id){
       // return $request;

        $response = Http::withHeaders([
          'Authorization' => $token
      ])->post($url, [
          'user_id' => $user_id,
          'product_id' => $request->product_id

      ]);
      $data = $response->json();
      return $data;
           
      }
      else{

        return response()->json(['status' => 0,'message'=>'please login'],200);


      }
      
     }
}
