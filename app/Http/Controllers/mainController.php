<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mainController extends Controller
{
   public function index()
   {


       if (Auth::user()){
           return redirect()->route('login_page');
       }else{
           return view('main');
       }
   }


   public function socket(){
        return view('includes.mini-chat');
   }



}
