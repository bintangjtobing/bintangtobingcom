<?php

namespace App\Http\Controllers;

use App\Suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Supplier_Controller extends Controller
{
    public function index()
    {
        $data_sup = \App\Suppliers::all();
        return view('supplier.index', ['data_sup' => $data_sup]);
    }
    public function create(Request $request)
    {
        $data_sup                        = new \App\Suppliers();
        $data_sup->supplier_code         = "SUPPLIER-" . $request->supplier_code;
        $data_sup->supplier_name         = $request->supplier_name;
        $data_sup->email                = $request->email;
        $data_sup->phone                = $request->phone;
        $data_sup->contact_person         = $request->contact_person;
        $data_sup->created_by            = auth()->user()->fullname;
        $data_sup->updated_by            = auth()->user()->fullname;
        $data_sup->save();

        return redirect('/supplier')->with('sukses', 'New supplier has been successfully added!');
    }
    public function delete($supplier_id)
    {
        $supplier = Suppliers::find($supplier_id);

        if ($supplier) {
            if ($supplier->delete()) {
                DB::statement('ALTER TABLE suppliers AUTO_INCREMENT = ' . (count(Suppliers::all()) + 1) . ';');
                return redirect('/supplier')->with('sukses', 'Purchase Order data has been successfully deleted');
            }
        }
    }
    public function edit($supplier_id)
    {
        $supplier                        = \App\Suppliers::find($supplier_id);
        return view('supplier.edit', ['supplier' => $supplier]);
    }
    public function update(Request $request, $supplier_id)
    {
        $supplier                        = \App\Suppliers::find($supplier_id);
        $supplier->update($request->all());
        $supplier->updated_by            = auth()->user()->fullname;
        $supplier->save();

        return redirect('/supplier')->with('sukses', 'Supplier data has been successfully updated!');
    }
}
