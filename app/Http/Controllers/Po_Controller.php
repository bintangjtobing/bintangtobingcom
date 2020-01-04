<?php

namespace App\Http\Controllers;

use App\Purchase_Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Po_Controller extends Controller
{
    public function index()
    {
        $po_data = \App\Purchase_Orders::all();
        $data_po = DB::table('purchase_orders')
            ->join('suppliers', 'purchase_orders.supplier_id', '=', 'suppliers.supplier_id')
            ->select('suppliers.*', 'purchase_orders.*')
            ->get();
        $data_sup = \App\Suppliers::all();
        return view('purchaseorders.index', ['po_data' => $po_data, 'data_po' => $data_po, 'data_sup' => $data_sup]);
    }
    public function create(Request $request)
    {
        $data_po                        = new \App\Purchase_Orders();
        $data_po->po_number             = $request->po_number;
        $data_po->po_date               = $request->po_date;
        $data_po->supplier_id           = $request->supplier_id;
        $data_po->total_price           = $request->total_price;
        $data_po->discount              = $request->discount;
        $data_po->created_by            = auth()->user()->fullname;
        $data_po->updated_by            = auth()->user()->fullname;
        $data_po->save();

        return redirect('/purchase-orders')->with('sukses', 'New purchase order has been successfully added!');
    }
    public function delete($po_id)
    {
        $data_po = Purchase_Orders::find($po_id);

        if ($data_po) {
            if ($data_po->delete()) {
                DB::statement('ALTER TABLE purchase_orders AUTO_INCREMENT = ' . (count(Purchase_Orders::all()) + 1) . ';');
                return redirect('/purchase-orders')->with('sukses', 'Purchase Order data has been successfully deleted');
            }
        }
    }
    public function edit($po_id)
    {
        $po = \App\Purchase_Orders::find($po_id);
        $data_po = DB::table('purchase_orders')
            ->join('suppliers', 'purchase_orders.supplier_id', '=', 'suppliers.supplier_id')
            ->select('suppliers.*', 'purchase_orders.*')
            ->get();
        return view('purchaseorders.edit', compact('supplier'), ['data_po' => $data_po, 'po' => $po]);
    }
    public function update(Request $request, $po_id)
    {
        $data_po                        = \App\Suppliers::find($po_id);
        $data_po->update($request->all());
        $data_po->updated_by            = auth()->user()->fullname;
        $data_po->save();

        return redirect('/purchase-orders')->with('sukses', 'Purchase Order data has been successfully updated!');
    }
}
