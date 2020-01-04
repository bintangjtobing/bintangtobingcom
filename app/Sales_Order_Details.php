<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_Order_Details extends Model
{
    //
    protected $table = 'sales_order_details';
    protected $primaryKey = 'so_detail_id';
    protected $fillable = ['_token', 'item_id', 'item_name', 'qty', 'price', 'line_discount', 'linetotal', 'remarks'];
}
