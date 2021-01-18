<?php

namespace App\Cms;

use Illuminate\Database\Eloquent\Model;

class ProjectBanner extends Model
{
    protected $fillable = ['title', 'subtitle', 'project_banners_id', 'imagen', 'cta'];

    protected $table = 'project_banners';

    public function project()
    {
    	return $this->belongsTo('App\Cms\Project', 'project_banners_id');
    }
}
