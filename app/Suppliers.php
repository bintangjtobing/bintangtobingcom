<?php

namespace App;

use Eloquent;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    //
    protected $table = 'suppliers';
    protected $primaryKey = 'supplier_id';
    protected $fillable = ['supplier_code', 'supplier_name', 'email', 'phone', 'contact_person'];

    public function purchaseord()
    {
        return $this->hasMany('App\Purchase_Orders', 'supplier_id');
    }
}
