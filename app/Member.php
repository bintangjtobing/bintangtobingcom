<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'users';
    protected $fillable = ['username', 'email', 'fullname', 'name', 'status', 'type', 'user_id'];
}
