<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Hash;


class postController extends Controller
{
    public function openNewProductPage()
    {
        if (Auth::user()){
            return view('loginUserPages.add-new-post');
        }else{
            return redirect()->route('myClassifieds');
        }
    }
}
