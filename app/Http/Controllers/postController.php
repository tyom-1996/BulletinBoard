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


    public function deleteMyPost(Request $request)
    {
        if($request->ajax())
        {
            $id = $request->input('id');
            Post::DeletePostInDatabase($id);
            return response()->json('deleted');
        }
    }


    public function editClassifiedsPage(Request $request)
    {
        $id = $request->id;
        $post_data = Post::GetPostByID($id);
        if ( $post_data != null )
        {
            return view('loginUserPages/edit-classifieds',array('post_data' => $post_data));
        }
        else
        {
            return redirect()->route('myClassifieds');
        }
    }


    public function editMyPost(Request $request){

        $files = $request->file();
        $post_id = $request->input('product_id');

        if ( !empty(Post::GetPostImagesByID($post_id)) ){
            $images = json_decode(Post::GetPostImagesByID($post_id));
        }else{
           $images = [];
        }

        // Validate Images

        $all_images = postController::imagesValidate($files, $request,$images);

        $insert_data = $request->input();
        $insert_data['tags'] =!empty( $request->input('tags')) ? $request->input('tags') : [];
        $insert_data['status'] = '0';
        $insert_data['user_id'] = Auth::id();

        Post::updatePostData($insert_data,$all_images,$post_id);
        return redirect()->route('myClassifieds');
    }



    public static function imagesValidate($files, $request,$images)
    {
        $user_id = Auth::id();

        foreach ($files as $key => $value){
            $request->validate([ $key => 'image|mimes:jpeg,png,jpg,gif,svg', ]);
            $image_new_name = Str::random(7).'_'.$user_id.'.'.request()->$key->getClientOriginalExtension();
            $images[] = asset("product-images/".$image_new_name) ;

            request()->$key->move(public_path("product-images"), $image_new_name);
        };

        return $images;
    }


    public function deletePostImage(Request $request)
    {
        if($request->ajax())
        {
            $key = $request->input('key');
            $product_id = $request->input('product_id');

            Post::deletePostImageInDB($key,$product_id);
            return response()->json('deleted');
        }
    }

    public function singlePostPage(Request $request)
    {
        $id = $request->id;
//        dd($id);

        return view('loginUserPages.single_post');
    }




}
