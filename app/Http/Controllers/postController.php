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
//        dd($request->input());

        $files = $request->file();
        $user_id = Auth::id();
        $images_paths = array();

        // Validate Images

        foreach ($files as $key => $value){
            $request->validate([ $key => 'image|mimes:jpeg,png,jpg,gif,svg', ]);
            $image_new_name = Str::random(7).'_'.$user_id.'.'.request()->$key->getClientOriginalExtension();
            $images_paths[] = asset("product-images/".$image_new_name) ;
            request()->$key->move(public_path("product-images"), $image_new_name);
        };


        $insert_data = $request->input();
        $insert_data['tags'] =!empty( $request->input('tags')) ? $request->input('tags') : [];
        $insert_data['status'] = '0';
        $insert_data['user_id'] = Auth::id();

        Post::SaveNewPost($insert_data,$images_paths);

        return redirect()->route('new-post-part-2');

    }


    public function deleteMyClassifieds(Request $request)
    {
        if($request->ajax())
        {
            $id = $request->input('id');
            Post::DeleteClassifiedsInDatabase($id);
            return response()->json('deleted');
        }
    }


    public function editClassifiedsPage(Request $request)
    {
        $id = $request->id;
        $post_data = Post::GetPostByID($id);
        return view('loginUserPages/edit-classifieds',array('post_data' => $post_data));

    }


    public function editMyClassifieds(Request $request){

        dd($request->input());
        //        $update_data =
    }
}
