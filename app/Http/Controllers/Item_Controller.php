<?php

namespace App\Http\Controllers;

use App\itemModel;
use Illuminate\Http\Request;

class Item_Controller extends Controller
{
    public function index()
    {
        $data_item = \App\itemModel::all();
        return view('item.index', ['data_item' => $data_item]);
    }
    public function create(Request $request)
    {
        $data_item = new \App\itemModel;
        $data_item->item_code = $request->item_code;
        $data_item->item_name = $request->item_name;
        $data_item->default_purchase_price = $request->default_purchase_price;
        $data_item->default_sales_price = $request->default_sales_price;
        $data_item->void = 'false';
        $data_item->created_by = auth()->user()->fullname;
        $data_item->updated_by = auth()->user()->fullname;
        $data_item->save();

        return redirect('/item')->with('sukses', 'New item data has been successfully added!');
    }
    public function delete($item_id)
    {
        $data_item = \App\itemModel::find($item_id);
        // $data_item->delete();
        // return redirect('/item')->with('sukses', 'Item data has been deleted!');
        if ($data_item) {
            if ($data_item->delete()) {

                DB::statement('ALTER TABLE items AUTO_INCREMENT = ' . (count(itemModel::all()) + 1) . ';');

                return redirect('/item')->with('sukses', 'Items has been successfully deleted!');
            }
        }
    }
    public function edit($item_id)
    {
        $data_item = \App\itemModel::find($item_id);
        return view('item/edit', ['data_item' => $data_item]);
    }
    public function update(Request $request, $item_id)
    {
        $data_item = \App\itemModel::find($item_id);
        $data_item->updated_by = auth()->user()->fullname;
        $data_item->save();
        $data_item->update($request->all());
        return redirect('item')->with('sukses', 'Item has been updated!');
    }
}
