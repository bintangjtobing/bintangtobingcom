<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messageDB extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'message_id';
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = [
        'subject', 'nama', 'email', 'pesan'
    ];
}
