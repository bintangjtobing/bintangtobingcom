<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemModel extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'item_id';
    protected $fillable = ['item_id', 'item_code', 'item_name', 'default_purchase_price', 'default_sales_price'];
}
