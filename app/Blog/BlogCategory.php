<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = ['title', 'description', 'image'];

    public function articles()
    {
    	return $this->hasMany('App\Blog\BlogArticle', 'category_id');
    }
}
