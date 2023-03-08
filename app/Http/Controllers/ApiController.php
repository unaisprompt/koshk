<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function __construct(){
        $this->url = config('global.api');
    }


    public function home(){

        $user_id= session()->get('user_id') ?? '';
        $url = $this->url."/homefeeds";
       $response = Http::post($url,  [
        'user_id'=>$user_id
        ]);
        
     //   return $response['deal_banner'];
        
      return view('home',compact('response'));
    
    }

    public function about(){

        $url = $this->url."/cmspages";
        $response = Http::get($url);
      //  return $response['about'];
        $about=$response['about'];
       return view('pages.about',compact('about'));

    }

    public function privacy(){

        $url = $this->url."/cmspages";
        $response = Http::get($url);
      //  return $response['privacypolicy'];
      $data=$response['privacypolicy'];
        return view('pages.privacy-policy',compact('data'));

    }
    public function terms(){

        $url = $this->url."/cmspages";
        $response = Http::get($url);
      //  return $response['termsconditions'];
      $data=$response['termsconditions'];

        return view('pages.termsandcondition',compact('data'));

    }
    public function returnPolicy(){

        $url = $this->url."/cmspages";
        $response = Http::get($url);
        //return $response;
      $data=$response['returnpolicy'];
     // return $data;
        return view('pages.return-policy',compact('data'));

    }


}
