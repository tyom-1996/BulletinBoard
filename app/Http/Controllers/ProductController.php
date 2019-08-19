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
        if (Auth::user()){

            $user_id = Auth::id();
            $user_data = DB::select('select * from users where id = :id', ['id' => $user_id]);
            $created_at = $user_data[0]->created_at;

            $y = "EXTRACT(YEAR FROM '".$created_at."')";
            $m = "EXTRACT(MONTH FROM '".$created_at."')";

            $month_array = array('Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря');
            $year = DB::select("SELECT EXTRACT(YEAR FROM '".$created_at."')")[0]->$y;
            $month =  DB::select("SELECT EXTRACT(MONTH FROM '".$created_at."')")[0]->$m;
            $created_at_content = 'На OBYAVA.ua с: '.$month.' '.$month_array[$month-1].'  '.$year.'';

            $user_data[0]->created_at_content = $created_at_content;


            $content = Post::Get_User_Classifieds();

            return view('loginUserPages/myClassifieds',array('user_data' => $user_data,'classifieds_Content' => $content));

        }else{
            return Redirect::route('login_page');
        }
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
            return redirect()
                ->route('products.index');
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

        return redirect()->route('postSuccessfullyPage');
    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show($id)
    {
        $post_data = Post::GetPostByID($id);
        if ( $post_data != null )
            return view('loginUserPages.single_post',array('post_data' => $post_data));
        else
            return redirect()
                ->route('products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit($id)
    {
        $post_data = User::find(Auth::id())->post->where('id','=',$id)->first();

        if ( isset($post_data) && !empty($post_data) )
            return view('loginUserPages/edit-classifieds',array('post_data' => $post_data));
        else
            return redirect()
                ->route('products.index');
    }

    /**
     * Update the specified resource in storage.
     *
     *
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
        return redirect()
            ->route('products.index');
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


    public function postSuccessfullyPage()
    {
        if (Auth::user()){
            return view('loginUserPages.new-post-part-2');
        }else{
            return redirect()->route('myClassifieds');
        }
    }


}
