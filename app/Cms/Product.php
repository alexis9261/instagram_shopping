<?php

namespace App\Cms;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $fillable = ['product', 'imagen', 'section_id'];

    protected $table = 'products';

    public function section()
    {
    	return $this->belongsTo('App\Cms\Section', 'section_id');
    }

    public function banners()
    {
    	return $this->hasMany('App\Cms\ProductBanner');
    }
}
