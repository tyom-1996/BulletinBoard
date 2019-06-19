<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\User;
use Hash;


class userController extends Controller
{
    public function index(){
        if (Auth::user()){
            return view('loginUserPages/myClassifieds');
        }else{
            return redirect()->route('login_page');
        }
    }

    public function getSignOut() {

        Auth::logout();
        return Redirect::route('login_page');

    }
}
