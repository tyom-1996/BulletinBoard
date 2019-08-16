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


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()){
            return view('loginUserPages.new-post-part-1');
        }else{
            return redirect()->route('myClassifieds');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

//    save new product

    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post_data = Post::GetPostByID($id);
        if ( $post_data != null )
            return view('loginUserPages.single_post',array('post_data' => $post_data));
        else
            return redirect()->route('myClassifieds');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post_data = Post::find($id);

        if ( $post_data != null )
        {
            return view('loginUserPages/edit-classifieds',array('post_data' => $post_data));
        }
        else
        {
            return redirect()->route('myClassifieds');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $files = $request->file();
        $post_id = $request->input('product_id');

        if ( !empty(Post::GetPostImagesByID($post_id)) ){
            $images = json_decode(Post::GetPostImagesByID($post_id));
        }else{
            $images = [];
        }

        // Validate Images

        $all_images = ProductController::imagesValidate($files, $request,$images);

        $insert_data = $request->input();
        $insert_data['tags'] =!empty( $request->input('tags')) ? $request->input('tags') : [];
        $insert_data['status'] = '0';
        $insert_data['user_id'] = Auth::id();

        Post::updatePostData($insert_data,$all_images,$post_id);
        return redirect()->route('myClassifieds');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        if($request->ajax())
        {
            $id = $request->input('id');
//            Post::DeletePostInDatabase($id);
            Post::destroy($id);
            return response()->json('deleted');
        }
    }




 /**
  * Custom Methods
  *
  *
  *
*/


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


    public function OpenNewProductPart2()
    {
        if (Auth::user()){
            return view('loginUserPages.new-post-part-2');
        }else{
            return redirect()->route('myClassifieds');
        }
    }


}
