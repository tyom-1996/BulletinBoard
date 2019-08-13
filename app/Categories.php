<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class Categories extends Model
{
    protected $primaryKey = 'id';

    public static function getAllCategories()
    {
       return Categories::All();
    }

    public static function getPostCategoryByPostID($post_id)
    {
        $post_data = Post::find($post_id);
        if ($post_data != null )
        {
            return $post_data->category;
        }else{
            return '';
        }
    }

    public static function getCategoryCountByID($category_id)
    {
      return  Post::where(['category' => $category_id])->get()->count();
    }
}
