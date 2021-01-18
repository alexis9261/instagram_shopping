<?php

namespace App\Cms;

use Illuminate\Database\Eloquent\Model;

class ProductBanner extends Model
{

	protected $fillable = ['title', 'subtitle', 'product_id', 'imagen', 'cta'];

    protected $table = 'product_banners';

    public function product()
    {
    	return $this->belongsTo('App\Cms\Product', 'product_id');
    }

}
