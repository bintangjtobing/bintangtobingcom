<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_Invoices extends Model
{
    //
    protected $table = 'sales_invoices';
    protected $primaryKey = 'si_id';
    protected $fillable = ['customer_id', 'si_number', 'customer_id', 'si_date', 'total_price', 'discount', 'grandtotal', 'user_id', 'so_numbers'];

    public function si_details()
    {
        return $this->hasOne('App\Sales_Invoices_Details');
    }
}
class SI_Details extends Model
{
    protected $table = 'sales_invoices_details';
    protected $primaryKey = 'si_detail_id';
    protected $fillable = ['item_id', 'qty', 'price', 'discount', 'linetotal'];
    public function sidetails()
    {
        return $this->belongsTo('App\Sales_Invoices');
    }
}
