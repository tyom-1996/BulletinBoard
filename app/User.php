<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

//https://laracasts.com/discuss/channels/laravel/symfony-component-debug-exception-fatalthrowableerror-e-recoverable-error-type-error-argument-1-passed-to-illuminateauthsessionguardlogin-must-be-an-instance-of-illuminatecontractsauthauthenticatable-instance-of-appuser-given-called-in-c2018relation1vendo
class User extends Authenticatable
{
    protected $fillable = ['fullname', 'email', 'password','gender','region','country','phone_numbers','profile_image'];

    public static function get_User_Photo()
    {
        return User::find(Auth::id())['profile_image'] ;
    }

    public static function Get_User_By_ID()
    {
        return User::find(Auth::id());
    }

}
