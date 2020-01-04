<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Sales_Invoices;

class Si_Controller extends Controller
{
    public function index()
    {
        $data_so = DB::table('sales_orders')
            ->select('sales_orders.*')
            ->get();
        $data_customer = DB::table('customers')
            ->select('customers.*')
            ->get();
        $data_si = DB::table('sales_invoices')
            ->join('customers', 'sales_invoices.customer_id', '=', 'customers.customer_id')
            ->select('sales_invoices.*', 'customers.*')
            ->get();
        return view('salesinvoices.index', ['data_si' => $data_si, 'data_customer' => $data_customer, 'data_so' => $data_so]);
    }
    public function delete($si_id)
    {
        // $data_si = \App\Sales_Invoices::find($si_id);
        // $data_si->delete();
        // return redirect('/sales-invoices')->with('sukses', 'Sales Order Item has been deleted!');

        $data_si = Sales_Invoices::find($si_id);

        if ($data_si) {
            if ($data_si->delete()) {
                DB::statement('ALTER TABLE sales_invoices AUTO_INCREMENT = ' . (count(Sales_Invoices::all()) + 1) . ';');
                return redirect('/sales-invoices')->with('sukses', 'Sales Invoices data has been successfully deleted');
            }
        }
    }
    public function create(Request $request)
    {
        $data_si = new \App\Sales_Invoices;
        $data_si->si_number = $request->si_number;
        $data_si->customer_id = $request->customer_id;
        $data_si->so_numbers = $request->so_numbers;
        $data_si->si_date = $request->si_date;
        $data_si->total_price = $request->total_price;
        $data_si->discount = $request->discount;
        $data_si->grandtotal = $request->grandtotal;
        $data_si->created_by = auth()->user()->fullname;
        $data_si->updated_by = auth()->user()->fullname;
        $data_si->save();

        return redirect('/sales-invoices')->with('sukses', 'New Sales Invoices has been created successfully!');
    }
    public function edit($si_id)
    {
        $data_so = DB::table('sales_orders')
            ->select('sales_orders.*')
            ->get();
        $data_customer = DB::table('customers')
            ->select('customers.*')
            ->get();
        $data_si = \App\Sales_Invoices::find($si_id);
        return view('salesinvoices.edit', ['data_si' => $data_si, 'data_so' => $data_so, 'data_customer' => $data_customer]);
    }
    public function update(Request $request, $si_id)
    {
        $data_si = \App\Sales_Invoices::find($si_id);
        $data_si->update($request->all());
        $data_si->updated_by = auth()->user()->fullname;
        $data_si->save();

        return redirect('/sales-invoices')->with('sukses', 'Your sales invoices data has been updated!');
    }
    public function report($si_id)
    {
        $data_so = DB::table('sales_orders')
            ->select('sales_orders.*')
            ->get();
        $data_customer = DB::table('customers')
            ->select('customers.*')
            ->get();
        $data_si = \App\Sales_Invoices::find($si_id);
        $data_sid = DB::table('sales_invoices_details')
            ->join('items', 'items.item_id', '=', 'sales_invoices_details.item_id')
            ->join('sales_invoices', 'sales_invoices.si_id', '=', 'sales_invoices_details.si_id')
            ->where('sales_invoices_details.si_id', '=', $data_si->si_id)
            ->select('sales_invoices_details.*', 'items.*', 'sales_invoices.*')
            ->get();
        return view('salesinvoices.report', ['data_si' => $data_si, 'data_customer' => $data_customer, 'data_so' => $data_so, 'data_sid' => $data_sid]);
    }
}
