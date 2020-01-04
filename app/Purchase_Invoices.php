<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Invoices extends Model
{
    //
    protected $table = 'puchase_invoices';
    protected $fillable = ['supplier_id'];
}
