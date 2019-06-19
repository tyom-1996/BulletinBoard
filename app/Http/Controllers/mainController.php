<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
   public function index()
   {
        return view('main');
   }


   public function socket(){
        return view('socket');
   }



}
