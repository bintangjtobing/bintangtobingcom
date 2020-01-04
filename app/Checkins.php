<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkins extends Model
{
    //
    protected $table = 'checkins';
    protected $fillable = ['user_id', 'customer_id'];
}
