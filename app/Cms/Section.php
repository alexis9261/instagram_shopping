<?php

namespace App\Cms;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';

    protected $fillable = ['section'];

    public function products()
    {
    	return $this->hasMany('App\Cms\Product');
    }
}
