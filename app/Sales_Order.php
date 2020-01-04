<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_Order extends Model
{
    //
    protected $table = 'sales_orders';
    protected $primaryKey = 'so_id';
    protected $fillable = ['so_id', 'so_number', 'customer_id', 'so_date', 'total_price', 'discount'];
}
