<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $table = 'messages';

    protected $fillable = ['name','message'];

    protected $dates = ['created_at', 'updated_at'];

}