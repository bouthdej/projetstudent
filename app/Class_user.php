<?php

namespace App;

use App\Class_user;
use Illuminate\Database\Eloquent\Model;

class Class_user extends Model
{
    protected $fillable=[
        'class_id',
        'user_id'
      
    ];
    public $timestamps = false;

}
