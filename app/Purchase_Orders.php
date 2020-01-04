<?php

namespace App;

use Eloquent;

use Illuminate\Database\Eloquent\Model;

class Purchase_Orders extends Model
{
    //
    protected $table = 'purchase_orders';
    protected $primaryKey = 'po_id';
    protected $with = 'supplier';
    protected $fillable = ['po_nnumber', 'supplier_id', 'po_date', 'total_price', 'discount', 'created_by', 'updated_by'];

    public function supplier()
    {
        return $this->belongsTo('App\Suppliers', 'supplier_id');
    }
}
