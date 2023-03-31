<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class ApiUserController extends Controller
{
    public function __construct(){
        $this->url = config('global.api');
    }



    public function login(){
       $user_id= session()->get('user_id');
       $token= session()->get('token');

        if($user_id && $token){
            return redirect('/my-account');
        }
        else{
            return ;
        }
    }
    public function getalreadyUserPassReset()
    {
        return view('pages.reset-already');
    }
    public function alreadyUserPassReset(Request $request){
         $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return ;
   if($request->password  != $request->conf_password)
   {
     return response()->json(["status"=>0,
                            "message"=>'conform password dos not match',]);
   }else{
    $url = $this->url."/reset-alredy-user"; 
    $token= 'Bearer '.session()->get('token');
    // $user_id= session()->get('user_id');
    $response = Http::withHeaders([
            'Authorization' => $token
    ])->post($url,  [
    'password'=>$request->password,
        ]);
        }
        //  return $response;
        $data = $response->json();
    if($response['status']==1){
      return response()->json(["status"=>1,
                            "message"=>$response['message'] ]);
    }
    else{
        return response()->json(["status"=>0,
                            "message"=>$response['message'],]);
    }
        // return view('pages.profile');
    }

    public function myaccount(){
         $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return ;

    $url = $this->url."/getprofile"; 
    $token= 'Bearer '.session()->get('token');
    $user_id= session()->get('user_id');
    $response = Http::withHeaders([
            'Authorization' => $token
    ])->post($url,  [
    'user_id'=>$user_id,
        ]);
        //  return $response;
        $data = $response->json();
    if($response['status']==1){

       return view('pages.myaccount.profile',compact('data'));
    }
    else{
        return back()->with('error', $response['message']);
    }
        // return view('pages.profile');
    }
    
    public function loginPost(Request $request){
        $url = $this->url."/login";
        $response = Http::post($url,  [
        'email'=>$request->email,
        'password'=>$request->password
        ]);
        // dd($request);
        if($response['status']==1){
           // return back()->with('error', $response['message']);
          // return $response;
            session()->put('user_id', $response['data']['id']);
            session()->put('token', $response['data']['access_token']);
            session()->put('name', $response['data']['name']);
            session()->put('email', $response['data']['email']);
            session()->put('profile_pic', $response['data']['profile_pic']);
            $carts = session()->get('cart');
           // return $carts;
            $url = $this->url."/addtocart";
            $user_id= session()->get('user_id');
            $token= 'Bearer '.session()->get('token');
            if($carts){
                foreach($carts as $cart){
                    $response = Http::withHeaders([
                        'Authorization' => $token
                    ])->post($url, [
                        'user_id' => $user_id,
                        'product_id' => $cart['product_id'],
                        'vendor_id' => 1,
                        'product_name' => $cart['product_name'],
                        'qty' => $cart['qty'],
                        'price' => $cart['price'],
                        'image' => $cart['image_url'],
                        'shipping_cost' => $cart['shipping_cost'],
                        'tax' => $cart['tax'],
                        'discount_amount' => 0,
                        'attribute' => $cart['attribute'],
                        'variation' => $cart['variation'],
                        'variationId' => $cart['variationId']
                    ]);
                    $scart = session()->get('cart');
                    if(isset($scart[$cart['product_id']])) {
                        unset($scart[$cart['product_id']]);
                        session()->put('cart', $scart);
                    }
        
                }

                // $cart = session()->get('cart');
                // session()->forget('cart');
                // session()->put('cart', $cart);
            }
            //   dd($response->json());
         return response()->json(["status"=>1,
                            "message"=>$response['message'],
                            "data" =>$response['data']['is_already'] ]);

           }
           else{
                 return response()->json(["status"=>0,
                            "message"=>$response['message']]);
           }
    }
public function loginPop(Request $request){
        $url = $this->url."/login";
        $response = Http::post($url,  [
        'email'=>$request->email,
        'password'=>$request->password
        ]);
        
        if($response['status']==1){
           // return back()->with('error', $response['message']);
          // return $response;
            session()->put('user_id', $response['data']['id']);
            session()->put('token', $response['data']['access_token']);
            session()->put('name', $response['data']['name']);
            session()->put('profile', $response['data']['profile_pic']);
            $carts = session()->get('cart');
           // return $carts;
            $url = $this->url."/addtocart";
            $user_id= session()->get('user_id');
            $token= 'Bearer '.session()->get('token');
            if($carts){
                foreach($carts as $cart){
                    $response = Http::withHeaders([
                        'Authorization' => $token
                    ])->post($url, [
                        'user_id' => $user_id,
                        'product_id' => $cart['product_id'],
                        'vendor_id' => 1,
                        'product_name' => $cart['product_name'],
                        'qty' => $cart['qty'],
                        'price' => $cart['price'],
                        'image' => $cart['image_url'],
                        'shipping_cost' => $cart['shipping_cost'],
                        'tax' => $cart['tax'],
                        'discount_amount' => 0,
                        'attribute' => $cart['attribute'],
                        'variation' => $cart['variation'],
                        'variationId' => $cart['variationId']
                    ]);
                    $scart = session()->get('cart');
                    if(isset($scart[$cart['product_id']])) {
                        unset($scart[$cart['product_id']]);
                        session()->put('cart', $scart);
                    }
        
                }

                // $cart = session()->get('cart');
                // session()->forget('cart');
                // session()->put('cart', $cart);
            }

             return response()->json(["status"=>1,
                            "message"=>$response['message']]);

           }
           else{
                 return response()->json(["status"=>0,
                            "message"=>$response['message']]);
           }
    }
    public function logout(){
       session()->forget('user_id');
       session()->forget('token');
        session()->forget('name');
        session()->forget('profile_pic');
        return redirect('/');
    }
    
    // public function register(){
    
    //     return view('pages.register');
    // }
    
    public function registerPost(Request $request){
        $url = $this->url."/register";
        $response = Http::post($url,  [
        'name'=>$request->name,
        'last_name'=>$request->last_name,
        'email'=>$request->email_reg,
        'password'=>$request->password_reg,
        'mobile'=>$request->phone,
        'country_code'=>+971,
        'token'=>$request->_token,
        'type'=>2,
        'register_type'=>'email',
        'login_type'=>'email'
        ]);
       if($response['status']==1){
        Session::put('email', $request->email);
         return response()->json(["status"=>1,
                            "message"=>$response['message']]);
       }
       else{
           return response()->json(["status"=>0,
                            "message"=>$response['message']]);
       }
    }

    public function emailVerify(Request $request){
        //  dd($request->email);
        $data = $request->session()->all();
        $url = $this->url."/emailverify";
        $response = Http::post($url,  [
        'email'=>$request->email,
        'token'=>$request->otp
        ]);
        //   dd($response->json());
        $response =$response->json();
          if($response['status']==1){
            session()->forget('email');
            session()->put('user_id', $response['data']['id']);
            session()->put('token', $response['data']['access_token']);
            session()->put('name', $response['data']['name']);
            session()->put('profile', $response['data']['profile_pic']);
         return response()->json(["status"=>1,
                            "message"=>$response['message']]);
       }
       else{
           return response()->json(["status"=>0,
                            "message"=>$response['message']]);
       }
    }

    public function profile(){

    }
    public function getAddressEdit(Request $request)
    {
        $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return ;
        $url = $this->url."/showAddress"; 
    $token= 'Bearer '.session()->get('token');
    $user_id= session()->get('user_id');
    $response = Http::withHeaders([
            'Authorization' => $token
    ])->post($url,  [
    'user_id'=>$user_id,
    'address_id'=>$request->id
        ]);
        $data = $response->json();
  if($response['status']==1){
        return response()->json(['status' => 1,
                "message"=>$response['message'],
              "data"=>$response['data']]);

     }
     else{
        return response()->json(['status' => 0,
                "message"=>$response['message']]);

     }
        
    }
    public function updateAddress(Request $request)
    {
       // return $request;
          $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return ;
         $url = $this->url."/editaddress"; 
        $token= 'Bearer '.session()->get('token');
        $user_id= session()->get('user_id');
        $response = Http::withHeaders([
                'Authorization' => $token
        ])->post($url,  [
        'address_id'=>$request->address_id,
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'street_address'=>$request->street_address,
        'pincode'=>1,
        'city'=>$request->city,
        'mobile'=>$request->mobile,
        'email'=>$request->email,
        'landmark'=>$request->landmark,
        ]);
        $data = $response->json();
      if($response['status']==1){
        return response()->json(['status' => 1,
                "message"=>$response['message']]);
     }
     else{
        return response()->json(['status' => 0,
                "message"=>$response['message']]);

     }
    }
    // public function getAddress()
    // {
    //    $user_id= session()->get('user_id');
    //     $token= session()->get('token');
    //     if(!$user_id && !$token)
    //     return ;
    //     return view('pages.myaccount.addressadd');
    // }
    public function addAddress(Request $request)
    {
        
        $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return ;
        $url = $this->url."/saveaddress"; 
            $token= 'Bearer '.session()->get('token');
            $user_id= session()->get('user_id');
            $response = Http::withHeaders([
                    'Authorization' => $token
            ])->post($url,  [
            'user_id'=>$user_id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'street_address'=>$request->street_address,
            'city'=>$request->city,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'pincode'=>0,
            'landmark'=>$request->landmark,
        ]);
        $data = $response->json();
   if($response['status']==1){
        return response()->json(['status' => 1,
                "message"=>$response['message'],
                    "data"=>$data]);

     }
     else{
        return response()->json(['status' => 0,
                "message"=>$response['message']]);

     }
    }
  public function addressList(){
        $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return ;
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

        return view('pages.myaccount.addresslist',compact('data'));
    }
    else{
        return back()->with('error', $response['message']);
    }
       
    }
    public function deleteAddress(Request $request)
    {
        $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return ;
    $url = $this->url."/deleteaddress"; 
    $token= 'Bearer '.session()->get('token');
    $user_id= session()->get('user_id');
    $response = Http::withHeaders([
            'Authorization' => $token
    ])->post($url,  [
    'address_id'=>$request->address_id,
        ]);
        $data = $response->json();
        return $data;
    }
    public function address(){
         $url = $this->url."/changepassword";
     $token= 'Bearer '.session()->get('token');
     $user_id= session()->get('user_id');
        $response = Http::withHeaders([
            'Authorization' => $token
        ])->post($url,  [
        'user_id'=>$user_id,
        'old_password'=>$request->old_password,
        'new_password'=>$request->new_password,
        'conform_password'=>$request->conform_password,
        ]);
     if($response['status']==1){
        return redirect('my-aacount');
       }
       else{
           return back()->with('error', $response['message']);
       }
    }
     public function forgetPassword(){
       return view('pages.forget-password');
    }
      public function forgetPasswordPost(Request $request)
      {
        $url = $this->url."/forgotPassword";
        $response = Http::post($url,  [
       'email'=>$request->email,
        ]);
        if($response['status']==1){
        Session::put('email', $request->email);
         return response()->json(["status"=>1,
                            "message"=>$response['message']]);
       }
       else{
           return response()->json(["status"=>0,
                            "message"=>$response['message']]);
       }
    }
    public function otpVerify(Request $request)
    {
        $data = $request->session()->all();
     $url = $this->url."/verifyOtp";
        $response = Http::post($url,  [
       'email'=>$data['email'],
       'otp'=>$request->otp,
        ]);
         $data = $response->json();
        // dd($data);
       if($response['status']==1){
         Session::put('user_id', $data['data']['id']);
        session()->forget('email');
        return response()->json(["status"=>1,
                            "message"=>$response['message']]);
       }
       else{
           return response()->json(["status"=>0,
                            "message"=>$response['message']]);
       }
    }

    public function resentOtp(Request $request)
    {
      $url = $this->url."/forgotPassword";
      $response = Http::post($url,  [
     'email'=>$request->email,
      ]);
      
      $data=$request->email;
     if($response['status']==1){
        return response()->json(['status' => 1],200);

     }
     else{
        return response()->json(['status' => 0],200);

     }
  }
    public function passwordReset(Request $request)
    {
     $data = $request->session()->all();
     $url = $this->url."/passwordChange";
        $response = Http::post($url,  [
       'new_pass'=>$request->new_password,
       'user_id'=>$data['user_id'],
        ]);
       if($response['status']==1){
       session()->forget('user_id');
        return response()->json(["status"=>1,
                            "message"=>$response['message']]);
       }
       else{
           return response()->json(["status"=>0,
                            "message"=>$response['message']]);
       }
    }
    public function passwordChangeUser()
    {
        $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return ;
        return view('pages.myaccount.passwordchange');
    }
     public function passwordChange(Request $request)
    {
        $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return ;
     $url = $this->url."/changepassword";
     $token= 'Bearer '.session()->get('token');
     $user_id= session()->get('user_id');
        $response = Http::withHeaders([
            'Authorization' => $token
        ])->post($url,  [
        'user_id'=>$user_id,
        'old_password'=>$request->old_password,
        'new_password'=>$request->new_password,
        'conform_password'=>$request->conform_password,
        ]);
      if($response['status']==1){
        return response()->json(['status' => 1,
                "message"=>$response['message']]);

     }
     else{
        return response()->json(['status' => 0,
                "message"=>$response['message']]);

     }
    }
public function editProfile(){
        $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return ;
     $url = $this->url."/getprofile"; 
    $token= 'Bearer '.session()->get('token');
    $user_id= session()->get('user_id');
    $response = Http::withHeaders([
            'Authorization' => $token
    ])->post($url,  [
    'user_id'=>$user_id,
        ]);
        $data = $response->json();
    if($response['status']==1){

       return view('pages.myaccount.editprofile',compact('data'));
    }
    else{
        return back()->with('error', $response['message']);
    }
}
public function updateProfile(Request $request){
        $user_id= session()->get('user_id');
        $token= session()->get('token');
        if(!$user_id && !$token)
        return ;
     $url = $this->url."/editprofile"; 
    $token= 'Bearer '.session()->get('token');
    $user_id= session()->get('user_id');

    if($request->image){
        $img =$request->file('image')->store('public/profile');
        $img_rm_public = str_replace('public/',"",$img);
        $file_name=str_replace('profile/',"",$img_rm_public);
    }
    else{
        $file_name='';
    }
    if($file_name){

        $response = Http::withHeaders([
            'Authorization' => $token
    ])
    ->attach(
    'image', file_get_contents(storage_path('app/public/profile/'.$file_name)), $file_name
     )->post($url,  [
      'id'=>$request->id,
      'name'=>$request->name,
    //   'email'=>$request->email,
      'mobile'=>$request->mobile,
      'user_id'=>$user_id,
        ]);
    }
    else{

        $response = Http::withHeaders([
            'Authorization' => $token
    ])
   ->post($url,  [
      'id'=>$request->id,
      'name'=>$request->name,
    //   'email'=>$request->email,
      'mobile'=>$request->mobile,
      'user_id'=>$user_id,
        ]);

    }
   
        $data = $response->json();
    if($response['status']==1){

       return redirect('my-account');
    }
    else{
        return back()->with('error', $response['message']);
    }
}
public function getOrderHistory()
{
     $user_id= session()->get('user_id');
     $token= session()->get('token');
        if(!$user_id && !$token)
        return ;
    $url = $this->url."/orderhistory";
    $tokens= 'Bearer '.session()->get('token');
    $response = Http::withHeaders([
        'Authorization' => $tokens
        ])->post($url,  [
       'user_id'=>$user_id,
        ]);
    $data = $response->json();
       if($response['status']==1){
        return view('pages.myaccount.orderhistory',compact('data'));
       }
       else{
           return back()->with('error', $response['message']);
       }
}
public function getOrderDetails(Request $request,$orderId)
{
     $user_id= session()->get('user_id');
     $token= session()->get('token');
        if(!$user_id && !$token)
        return ;
    $url = $this->url."/orderdetails";
    $tokens= 'Bearer '.session()->get('token');
    $orderDetailId = decrypt($orderId);
    $response = Http::withHeaders([
        'Authorization' => $tokens
        ])->post($url,  [
       'user_id'=>$user_id,
       'order_number'=>$orderDetailId ,
 
        ]);
        //  return $response;
    $data = $response->json();

       if($response['status']==1){
        return view('pages.myaccount.orderdetails',compact('data'));
       }
       else{
           return back()->with('error', $response['message']);
       }
}
public function addNewsLetter(Request $request)
{
    $url = $this->url."/subscribe";
        $response = Http::post($url,  [
       'email'=>$request->email,
        ]);
         $data = $response->json();
      return $data;      
}
}
