<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Invoices_Details extends Model
{
    //
    protected $table = 'purchase_invoice_details';
    protected $fillable = ['item_id', 'qty'];
}
