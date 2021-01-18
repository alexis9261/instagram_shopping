<?php

namespace App\Cms;

use Illuminate\Database\Eloquent\Model;

class ServiceBanner extends Model
{
    protected $fillable = ['title', 'subtitle', 'service_id', 'imagen', 'cta'];

    protected $table = 'service_banners';


    public function service()
    {
    	return $this->belongsTo('App\Cms\Service', 'service_id');
    }
}
