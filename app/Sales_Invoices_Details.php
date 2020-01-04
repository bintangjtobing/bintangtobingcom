<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_Invoices_Details extends Model
{
    //
    protected $table = 'sales_invoices_details';
    protected $primaryKey = 'si_detail_id';
    protected $fillable = ['item_id', 'qty', 'price', 'discount', 'linetotal'];
    public function sidetails()
    {
        return $this->belongsTo('App\Sales_Invoices');
    }
}
