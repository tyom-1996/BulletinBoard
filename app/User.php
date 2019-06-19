<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
//https://laracasts.com/discuss/channels/laravel/symfony-component-debug-exception-fatalthrowableerror-e-recoverable-error-type-error-argument-1-passed-to-illuminateauthsessionguardlogin-must-be-an-instance-of-illuminatecontractsauthauthenticatable-instance-of-appuser-given-called-in-c2018relation1vendo
class User extends Authenticatable
{
    protected $fillable = ['fullname', 'email', 'password','gender','region','country','phone_numbers'];

}
