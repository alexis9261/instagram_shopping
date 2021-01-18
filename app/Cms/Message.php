<?php

namespace App\Cms;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'message'];
}
