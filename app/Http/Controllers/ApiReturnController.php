<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiReturnController extends Controller
{
     public function __construct(){
        $this->url = config('global.api');
    }

    public function purchaseReturn(Request $request,$orderId,$product_id)
    {
         $user_id= session()->get('user_id');
     $token= session()->get('token');
        if(!$user_id && !$token)
        return view('pages.login');
    $url = $this->url."/orderdetails";
    $productid = decrypt($product_id);
    $tokens= 'Bearer '.session()->get('token');
    $orderDetailId = decrypt($orderId);
    $response = Http::withHeaders([
        'Authorization' => $tokens
        ])->post($url,  [
       'user_id'=>$user_id,
       'order_number'=>$orderDetailId 
        ]);
    $data = $response->json();
       if($response['status']==1){
        return view('pages.return.return',compact('data','productid'));
       }
       else{
           return back()->with('error', $response['message']);
       }
    }
    public function returnPost(Request $request)
    {
          $user_id= session()->get('user_id');
     $token= session()->get('token');
        if(!$user_id && !$token)
        return view('pages.login');
    $url = $this->url."/returnrequest";
    $tokens= 'Bearer '.session()->get('token');
    $response = Http::withHeaders([
        'Authorization' => $tokens
        ])->post($url,  [
       'user_id'=>$user_id,
       'order_id'=>$request->orderid,
       'return_reason'=>$request->return_reason,
        'status'=>7
        ]);
    $data = $response->json();
       if($response['status']==1){
       return $data;
       }
       else{
           return back()->with('error', $response['message']);
       }
    }
}
