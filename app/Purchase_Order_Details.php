<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Order_Details extends Model
{
    //
    protected $table = 'purchase_order_details';
    protected $fillable = ['item_id'];
}
