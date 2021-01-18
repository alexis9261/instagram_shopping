<?php

namespace App\Cms;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

	protected $fillable = ['service', 'imagen', 'section_id'];

    protected $table = 'services';


    public function section()
    {
    	return $this->belongsTo('App\Cms\Section', 'section_id');
    }

    public function banners()
    {
    	return $this->hasMany('App\Cms\ServiceBanner');
    }
}
