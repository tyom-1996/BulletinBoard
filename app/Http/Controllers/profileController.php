<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\User;
use App\Post;
use Hash;
use Session;

class profileController extends Controller
{
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




    public function getSignOut()
    {
        Auth::logout();
        return Redirect::route('login_page');
    }


    public function uploadProfilePhoto(Request $request)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user_id = Auth::id();
        $imageName = $user_id.'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path("profile-images/$user_id-image"), $imageName);

        $path = asset("profile-images/$user_id-image/".$imageName);

        DB::table('users')
            ->where('id', $user_id)
            ->update(['profile_image' => $path]);

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }




    public function myMessages()
    {
        if (Auth::user()){

            $user_id = Auth::id();
            $user_data = DB::select('select * from users where id = :id', ['id' => $user_id]);

            return view('loginUserPages/myMessages',array('user_data' => $user_data));
        }else{
            return Redirect::route('login_page');
        }
    }
}
