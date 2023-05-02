<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    public function __construct(){
        $this->url = config('global.api');
    }
    public function blogList(){
      $url = $this->url."/blog-list";
        $response = Http::post($url);
       if($response->successful())
       {
      return view('pages.blog',["data" =>$response->object()->data,
                                                 ]);
      }
    }
     public function blogDetail($id){
      $url = $this->url."/blog-detail";
     $last_url= last(request()->segments());
        $response = Http::post($url,  [
       'slug'=>$last_url,
        ]);
       if($response->successful())
       {
      return view('pages.blog-detail',["data" =>$response->object()->data,
                                                 ]);
      }
    }
}
