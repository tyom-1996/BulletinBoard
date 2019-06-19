<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use Hash;

class registerController extends Controller
{


    public function index(){
       if (Auth::user()){
           return redirect()->route('myClassifieds');
       }else{
           return view('register');
       }
    }

    public function register(Request $request){

        $rules =[
            'fullname'=>'required',
            'gender' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ];
        $message = [
            'fullname.required' => 'This field required.',
            'email.required' => 'This field required.',
            'gender.unique' => 'Email already exists.',
            'password.min' => 'Password must be 6 char',
            'password_confirmation.required' => 'This field required.'
        ];
        // VALIDATE
        $validatedData = $request->validate($rules,$message);

        // INSERT
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        User::create($input);

        return  redirect()->route('login_page');

    }

}
