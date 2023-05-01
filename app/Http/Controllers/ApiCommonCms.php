<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiCommonCms extends Controller
{
   public function about_us()
   {
        $data=getCommonFields();
         return view('pages.about_us',compact('data'));
   }
   public function privacy_policy()
   {
     $data=getCommonFields();
         return view('pages.privacy_policy',compact('data'));
   }
   public function terms_and_condition()
   {
      $data=getCommonFields();
         return view('pages.terms_and_condition',compact('data'));
   }
   public function search_terms()
   {
      $data=getCommonFields();
         return view('pages.search_terms',compact('data'));
   }
   public function return_policy()
   {
      $data=getCommonFields();
         return view('pages.return_policy',compact('data'));
   }
   public function faq()
   {
      $data=getCommonFields();
         return view('pages.faq',compact('data'));
   }
   public function payment()
   {
      $data=getCommonFields();
         return view('pages.payment',compact('data'));
   }
   public function shippment()
   {
      $data=getCommonFields();
         return view('pages.shippment',compact('data'));
   }
}
