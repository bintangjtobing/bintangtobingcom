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
                      <div class="responsive-table">
                      <table id="itemtable" class="table table-hover table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Item code</th>
                          <th>Item name</th>
                          <th>Harga normal purchase</th>
                          <th>Harga normal sales</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data_item as $item)
                        <tr>
                        <td>{{$item->item_code}}</td>
                        <td>{{$item->item_name}}</td>
                        <td>{{$item->default_purchase_price}}</td>
                        <td>{{$item->default_sales_price}}</td>
                        <td><a href="/item/{{$item->item_id}}/edit" class="btn btn-warning"><span class="icon-settings icons icon"></span></a><a href="/item/{{$item->item_id}}/delete" class="btn btn-danger"><span class="icon-trash icons icon"></span></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
              <script>
                  $(document).ready( function () {
    $('#itemtable').DataTable();
} );
                </script>
              <!-- Modal #additem -->
              <div class="modal fade bs-example-modal-lg" id="additem" tabindex="-1" role="dialog" aria-labelledby="addItem">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                      <form action="/item/create" method="POST">
                      {{ csrf_field() }}
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="addItem">Add Item Data</h4>
                        </div>
                        <div class="modal-body">
                              <div class="col-md-6">
                              <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                      <input type="text" name="item_code" class="form-text" required>
                                      <span class="bar"></span>
                                      <label for="item_code">Code Item</label>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" name="item_name" class="form-text" required>
                                    <span class="bar"></span>
                                    <label for="item_name">Nama Item</label>
                              </div>
                          </div>
                          <div class="col-md-6" style="margin-top:40px; !important">
                            <div class="form-group form-animate-text">
                            <input type="text" class="form-text" name="default_purchase_price" required>
                            <span class="bar"></span>
                            <label for="default_purchase_price">Harga Default</label>
                            </div>
                          </div>
                          <div class="col-md-6" style="margin-top:40px; !important">
                                <div class="form-group form-animate-text">
                                    <input type="text" class="form-text" name="default_sales_price" required>
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
                    </div>
                  </div>
@endsection
