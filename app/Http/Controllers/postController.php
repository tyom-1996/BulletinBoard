<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\User;
use App\Post;
use Hash;



class postController extends Controller
{
    public function open_New_Post_Page_Part_1()
    {
        if (Auth::user()){
            return view('loginUserPages.new-post-part-1');
        }else{
            return redirect()->route('myClassifieds');
        }
    }

    public function open_New_Post_Page_Part_2()
    {
        if (Auth::user()){
            return view('loginUserPages.new-post-part-2');
        }else{
            return redirect()->route('myClassifieds');
        }
    }



    public function addNewProduct(Request $request)
    {

        $files = $request->file();
        $user_id = Auth::id();
        $images_paths = array();

        // Validate Text

        $request->validate([ 'name' => 'required','price' => 'required','currency' => 'required','description' => 'required', ]);

        // Validate Images

        foreach ($files as $key => $value){
            $request->validate([ $key => 'image|mimes:jpeg,png,jpg,gif,svg', ]);
            $image_new_name = Str::random(7).'_'.$user_id.'.'.request()->$key->getClientOriginalExtension();
            $images_paths[] = asset("product-images/".$image_new_name) ;
            request()->$key->move(public_path("product-images"), $image_new_name);
        };

        Post::Save_New_Post($request->input(),$images_paths);
        return redirect()->route('new-post-part-2');

    }
}
