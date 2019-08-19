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
use Session;

class userController extends Controller
{


    public function welcomeMainPage()
    {

        if (Auth::user()){
            return redirect()->route('login_page');
        }else{
            return view('main');
        }
    }

    public function openLoginPage()
    {
        if (Auth::user()){
            return redirect()
                ->route('products.index');
        }else{
            return view('login');
        }
    }


    public function login(Request $request)
    {
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

            Session::put('user_data', [
                'id' => Auth::user()->id,
                'fullname' => Auth::user()->fullname,
                'email' => Auth::user()->email,
                'gender' => Auth::user()->gender,
                'region' => Auth::user()->region,
                'country' => Auth::user()->country,
                'phone_numbers' => Auth::user()->phone_numbers,
                'profile_image' => Auth::user()->profile_image

            ]);

            return redirect()
                ->route('products.index');
        }else{
            return redirect()
                ->route('login_page');
        }

    }



    public function openRegisterPage()
    {
        if (Auth::user()){
            return redirect()->route('myClassifieds');
        }else{
            return view('register');
        }
    }


    public function register(Request $request){

        // VALIDATE

        $validatedData = $request->validate(
            [
                'fullname'=>'required',
                'gender' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:6'
            ],
            [
                'fullname.required' => 'This field required.',
                'email.required' => 'This field required.',
                'gender.unique' => 'Email already exists.',
                'password.min' => 'Password must be 6 char',
                'password_confirmation.required' => 'This field required.'
            ]
        );

        // INSERT
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['profile_image'] = asset("profile-images/default-image.png");
        User::create($input);

        return  redirect()->route('login_page');

    }

}
