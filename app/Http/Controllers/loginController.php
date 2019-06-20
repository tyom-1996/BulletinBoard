<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
//use \Illuminate\Contracts\Auth\Authenticatable;
use App\User;
use Hash;


class loginController extends Controller
{

    public function index(){
        if (Auth::user()){
            return redirect()->route('myClassifieds');
        }else{
            return view('login');
        }
    }

    public function login(Request $request){
        $rules = [
            'email' => 'required',
            'password' => 'required|min:6'
        ];

        $message = [
            'email.required' => 'This field required.',
            'password.min' => 'Password must be 6 char',
            'password.required' => 'This field required'
        ];

        $validatedData = $request->validate($rules,$message);

        $credentials =[
            'email' =>   $request->input('email'),
            'password' =>   $request->input('password')
        ];

        if (Auth::attempt(['email' => $request->input('email'), 'password' =>  $request->input('password')])) {
            return redirect()
                ->route('myClassifieds');
        }else{
            return redirect()
                ->route('login_page');
        }

    }
}
