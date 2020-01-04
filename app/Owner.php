<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //
    protected $table = 'owner';
    protected $fillable = ['long_name', 'email'];
}
