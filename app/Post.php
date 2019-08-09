<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $primaryKey = 'id';
   protected $fillable = ['title','user_id','price','currency','description','category','tags','images','allow_comments'];


    public static function SaveNewPost($save_data,$images)
    {

       $post = new Post();
       $post->user_id = $save_data['user_id'];
       $post->title = $save_data['name'];
       $post->price = $save_data['price'];
       $post->currency =$save_data['currency'] ;
       $post->description =$save_data['description'] ;
       $post->images = json_encode($images);
       $post->tags = json_encode($save_data['tags']);
//       $post->category = $save_data['category'];
       $post->category = 'category';
       $post->allow_comments = isset($save_data['allow_comments']) ? $save_data['allow_comments'] : 0 ;
       $post->status =$save_data['status'] ;
       $post->country =$save_data['country'] ;
       $post->save();
   }


   public static function Get_User_Classifieds()
   {

       $classifieds_content = [
           'active_classifieds' =>  Post::Get_Posts_By_Status('1'),
           'on_maderation_classifieds' => Post::Get_Posts_By_Status('0'),
           'canceled_by_moderator' => Post::Get_Posts_By_Status('-1')
       ];

       return $classifieds_content;

   }

   public static function Get_Posts_By_Status($post_status)
   {
        $result = [];
        $posts_res =  Post::select('*')
                    ->where('user_id','=',Auth::id())
                    ->where('status','=',$post_status)
                    ->get();

        foreach ($posts_res as $key){
            $result[] = $key->original;
        }
        return $result;

   }



    public static function GetPostByID($id)
    {
        $post_data = Post::find($id);
        return $post_data;
    }


    public static function DeleteClassifiedsInDatabase($id)
    {
       Post::where('id', '=', $id)->delete();
    }

//
//    public static function insertInCategoryTable()
//    {
//        $data = array(
//            array('short_name'=>'cat-1', 'category_name'=> 'dwdw', 'svg_content'=> 'dwdw')
//        );
//
//        Post::insert($data);
//    }




}
