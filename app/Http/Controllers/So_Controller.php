<?php

namespace App\Http\Controllers;

use app\itemModel;
use App\Http\Controllers\Controller;
use App\Sales_Order_Details;
use App\Sales_Invoices;
use App\Sales_Order;
use Carbon\Traits\Timestamp;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class So_Controller extends Controller
{
    //
    public function index()
    {
        $data_so                        = \App\Sales_Order::all();
        return view('salesorder.index', ['data_so' => $data_so]);
    }
    public function create(Request $request)
    {
        $data_so                        = new \App\Sales_Order();
        $data_so->so_number             = $request->so_number;
        $data_so->so_date               = $request->so_date;
        $data_so->customer_id           = $request->customer_id;
        $data_so->total_price           = $request->total_price;
        $data_so->discount              = $request->discount;
        $data_so->grandtotal            = $request->grandtotal;
        $data_so->created_by            = auth()->user()->fullname;
        $data_so->updated_by            = auth()->user()->fullname;
        $data_so->save();

        return redirect('/so')->with('sukses', 'New sales order has been successfully added!');
    }
    public function edit($so_id)
    {
        $data_so                        = \App\Sales_Order::find($so_id);
        return view('salesorder.edit', ['data_so' => $data_so]);
    }
    public function update(Request $request, $so_id)
    {
        $data_so                        = \App\Sales_Order::find($so_id);
        $data_so->update($request->all());
        $data_so->updated_by            = auth()->user()->fullname;
        $data_so->save();

        return redirect('/so')->with('sukses', 'Sales order data has been successfully updated!');
    }
    public function delete($so_id)
    {
        $data_so = Sales_Order::find($so_id);

        if ($data_so) {
            if ($data_so->delete()) {
                DB::statement('ALTER TABLE sales_orders AUTO_INCREMENT = ' . (count(Sales_Order::all()) + 1) . ';');
                return redirect('/so')->with('sukses', 'Sales Order data has been successfully deleted');
            }
        }
    }
    public function details($so_id)
    {
        // DATA LAMA 27 JULY 2019
        $data_so                        = \App\Sales_Order::find($so_id);
        $data_detailso                  = DB::table('sales_order_details')
            ->join('items', 'sales_order_details.item_id', '=', 'items.item_id')
            ->where('sales_order_details.so_id', '=', $data_so->so_id)
            ->select('sales_order_details.*', 'items.*')
            ->get();
        $itemList                       = DB::table('items')
            ->groupBy('item_name')
            ->get();
        $datacustomer                   = \App\Customer_Model::all();
        $itemdata                       = \App\itemModel::all();
        return view('salesorder.details', ['data_detailso' => $data_detailso, 'data_so' => $data_so, 'datacustomer' => $datacustomer, 'itemdata' => $itemdata, 'itemList' => $itemList]);
    }
    public function itemadd(Request $request)
    {
        // $nilaiitem = \App\itemModel::where('')
        $data_detailso                  = new \App\Sales_Order_Details;
        $data_detailso->so_id           = $request->so_id;
        $data_detailso->item_id         = $request->item_id;
        $data_detailso->qty             = $request->qty;
        $data_detailso->price           = $request->price;
        $data_detailso->line_discount   = $request->line_discount;
        $data_detailso->linetotal       = $request->linetotal;
        $data_detailso->remarks         = $request->remarks;
        $data_detailso->save();

        return redirect('/so')->with('sukses', 'Add data item on sales order has been successfull!');
    }
    public function edititem($so_detail_id)
    {
        $itemList                       = DB::table('items')
            ->groupBy('item_name')
            ->get();
        $data_so                        = \App\Sales_Order_Details::find($so_detail_id);
        return view('salesorder.editdetailsitem', ['data_so' => $data_so, 'itemList' => $itemList]);
    }
    public function updateitem(Request $request, $so_detail_id)
    {
        $data_so                        = \App\Sales_Order_Details::find($so_detail_id);
        $data_so->update($request->all());
        $data_so->save();
        return redirect('/so')->with('sukses', 'Sales order data item has been successfully updated!');
    }
    public function detailsdelete($so_detail_id)
    {
        $data_so                        = \App\Sales_Order_Details::find($so_detail_id);
        // $data_so->delete();
        // return redirect('/so')->with('sukses', 'Item on that sales order has been deleted!');
        if ($data_so) {
            if ($data_so->delete()) {

                DB::statement('ALTER TABLE items AUTO_INCREMENT = ' . (count(Sales_Order_Details::all()) + 1) . ';');

                return redirect('/so')->with('sukses', 'Items has been successfully deleted!');
            }
        }
    }
    public function generatesi($so_id)
    {
        $data_so                        = \App\Sales_Order::find($so_id);
        $data_detailso                  = DB::table('sales_order_details')
            ->join('sales_orders', 'sales_order_details.so_id', '=', 'sales_orders.so_id')
            ->join('items', 'sales_order_details.item_id', '=', 'items.item_id')
            ->where('sales_order_details.so_id', '=', $data_so->so_id)
            ->select('sales_order_details.*', 'sales_orders.*', 'items.*')
            ->get();
        $viewso_data                    = DB::table('sales_orders')
            ->join('sales_invoices', 'sales_orders.so_number', '=', 'sales_invoices.so_numbers')
            ->where('sales_orders.so_number', '=', $data_so->so_number)
            ->select('sales_orders.*', 'sales_invoices.*')
            ->get();
        // dd($viewso_data);
        return view('salesorder.generatesi', ['viewso_data' => $viewso_data, 'data_so' => $data_so, 'data_detailso' => $data_detailso]);
    }
    public function processgenerate(Request $request, $so_number)
    {
        $data_so                        = \App\Sales_Order::find($so_number);
        $viewso_data                    = new \App\Sales_Invoices();
        $viewso_data->si_number = $request->si_number;
        $viewso_data->so_numbers = $request->so_numbers;
        $viewso_data->customer_id = $request->customer_id;
        $viewso_data->si_date = $request->si_date;
        $viewso_data->total_price = $request->total_price;
        $viewso_data->discount = $request->discount;
        $viewso_data->grandtotal = $request->grandtotal;
        $viewso_data->created_by = auth()->user()->fullname;
        $viewso_data->user_id = auth()->user()->id;
        $viewso_data->save();

        $sidetail = new \App\Sales_Invoices_Details();
        $sidetail->so_detail_id = Input::get('so_detail_id');
        $sidetail->item_id = Input::get('item_id');
        $sidetail->qty = Input::get('qty');
        $sidetail->price = Input::get('price');
        $sidetail->line_discount = Input::get('line_discount');
        $sidetail->linetotal = Input::get('linetotal');
        $viewso_data->SI_Details()->save($sidetail);

        // return redirect('/sales-invoices')->with('sukses', 'Generate Sales Invoice {so_number} has been succesfully!');
        dd($viewso_data);
    }
}
