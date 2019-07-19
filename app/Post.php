<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $primaryKey = 'id';

   public static function Save_New_Post($save_data,$images)
   {
       $post = new Post();
       $post->title = $save_data['name'];
       $post->price = $save_data['price'];
       $post->currency =$save_data['currency'] ;
       $post->description =$save_data['description'] ;
       $post->images = json_encode($images);
       $post->save();
   }
}
