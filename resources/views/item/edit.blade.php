@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Items Management</h3></div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><span title="Add Customer" class="icon-plus icons icon text-right" data-toggle="modal" data-target="#additem"></span></h3>
                          </div>
                      </div>
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                    @endif
                    <div class="panel-body">
                      <!-- Modal #additem -->
                    <form action="/item/{{$data_item->item_id}}/update" method="POST">
                        {{csrf_field()}}
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="addItem">Edit Customer Data</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="text" name="item_code" class="form-text" value="{{$data_item->item_code}}" required>
                                        <span class="bar"></span>
                                        <label for="item_code">Code Item</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="text" name="item_name" class="form-text" value="{{$data_item->item_name}}"required>
                                        <span class="bar"></span>
                                        <label for="item_name">Nama Item</label>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-top:40px; !important">
                                <div class="form-group form-animate-text">
                                <input type="text" class="form-text" name="default_purchase_price" value="{{$data_item->default_purchase_price}}" required>
                                <span class="bar"></span>
                                <label for="default_purchase_price">Harga Default</label>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-top:40px; !important">
                                    <div class="form-group form-animate-text">
                                    <input type="text" class="form-text" name="default_sales_price" value="{{$data_item->default_sales_price}}" required>
                                        <span class="bar"></span>
                                        <label for="default_sales_price">Harga Default Sales</label>
                                    </div>
                                </div>
                                
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Data</button>
                            </div>
                            </form>
                    </div>

              
@endsection
