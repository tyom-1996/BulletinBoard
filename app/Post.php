<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $primaryKey = 'id';
   protected $fillable = ['title','price','currency','description','category','tags','images','allow_comments'];


    public static function Save_New_Post($save_data,$images)
   {

       $post = new Post();
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
       $post->save();
   }
}
