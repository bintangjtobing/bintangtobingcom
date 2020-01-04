<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_Model extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $fillable = ['customer_id', 'customer_code', 'customer_name', 'email', 'phone', 'contact_person', 'address', 'user_id', 'created_by', 'updated_by', 'void'];
}
