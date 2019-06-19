<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
   public function index()
   {
       $content = '';

       for ($i = 0; $i < 10; $i++){
           $content.= "
                <div class='content-scrolling-top-item'>
                test
                </div>
           ";
       }

        return view('main',array('content' => $content));
   }


   public function login(){
        return view('login');
   }

   public function register(){
        return view('register');
   }


   public function socket(){
        return view('socket');
   }



}
