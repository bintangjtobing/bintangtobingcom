<?php

namespace App\Http\Controllers;

use App\Customer_Model;
use Illuminate\Http\Request;
use App\Member;

class Cust_Controller extends Controller
{
    public function index()
    {
        $data_customer = \App\Customer_Model::all();
        return view('customer.index', ['data_customer' => $data_customer]);
    }
    public function create(Request $request)
    {

        $customer = new \App\Customer_Model;
        $customer->customer_code = $request->customer_code;
        $customer->customer_name = $request->customer_name;
        $customer->email = $request->email;
        $customer->phone = '+62' . $request->phone;
        $customer->contact_person = $request->contact_person;
        $customer->address = $request->address;
        $customer->user_id = $request->user_id;
        $customer->created_by = auth()->user()->fullname;
        $customer->updated_by = auth()->user()->fullname;
        $customer->void = 'false';
        $customer->save();

        return redirect('/customer')->with('sukses', 'New customer data has been successfully added!');
    }
    public function delete($customer_id)
    {
        $customer = \App\Customer_Model::find($customer_id);
        // $customer->delete();
        // return redirect('/customer')->with('sukses', 'Users has been deleted!');
        if ($customer) {
            if ($customer->delete()) {

                DB::statement('ALTER TABLE items AUTO_INCREMENT = ' . (count(Customer_Model::all()) + 1) . ';');

                return redirect('/customer')->with('sukses', 'Items has been successfully deleted!');
            }
        }
    }
    public function edit($customer_id)
    {
        $customer = \App\Customer_Model::find($customer_id);
        return view('customer/edit', ['customer' => $customer]);
    }
    public function update(Request $request, $customer_id)
    {
        $customer = \App\Customer_Model::find($customer_id);
        $customer->update($request->all());
        $customer->updated_by = auth()->user()->fullname;
        $customer->save();
        return redirect('/customer')->with('sukses', 'Customer data has been updated!');
    }
}
