@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Sales Order No.{{$data_so->so_number}} - Details</h3></div>
                          
                      </div>
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                    @endif
                    
                    <div class="panel-body">
                    <form action="/so/{{$data_so->so_id}}/updatedetails" method="POST">
                                {{csrf_field()}}
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="addSOLabel">Details Sales Order</strong></h4>
                                  </div>
                                  <div class="modal-body">
                                        <div class="col-md-6">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        <input type="text" name="so_number" value="{{$data_so->so_number}}" class="form-text" required>
                                                <span class="bar"></span>
                                                <label for="so_number">Sales Order Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        <input type="text" name="so_date" value="{{$data_so->so_date}}" class="form-text" required>
                                              <span class="bar"></span>
                                              <label for="so_date">Sales Order Date.</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            Customer Name<br>
                                        <select name="customer_name" id="customer_name">
                                            @foreach ($datacustomer as $customerName)
                                        <option value="{{$customerName->customer_name}}" @if($customerName->customer_name=='{{$customerName->customer_name}}') selected @endif>{{$customerName->customer_name}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        <input type="text" class="form-text" id="discount" name="discount" value="{{$data_so->discount}}" required>
                                                  <span class="bar"></span>
                                                  <label for="discount">Discount</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                      <input type="text" value="{{$data_so->grandtotal}}" id="grandtotal" name="grandtotal" class="form-text">
                                        <span class="bar"></span>
                                        <label for="grandtotal">Total Harga</label>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                                      <h3><span title="Add SO" class="icon-plus icons icon text-right" data-toggle="modal" data-target="#adddataItem"></span></h3>
                                    </div>
                                    <div class="responsive-table">
                                            <table id="datatables-example" class="table table-hover table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                              <tr>
                                                <th>Item Name</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                                <th>Line Discount</th>
                                                <th>Line Total</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              @if(!$data_detailso->isEmpty())
                                              @foreach($data_detailso as $mix)
                                              <tr>
                                              <td>{{$mix->item_name}}</td>
                                                  <td>{{$mix->qty}}</td>
                                                  <td>{{$mix->price}}</td>
                                                  <td>{{$mix->line_discount}}</td>
                                                  <td>{{$mix->linetotal}}</td>
                                              <td>{{$mix->remarks}}</td>
                                                  <td><a href="/so/{{$mix->so_detail_id}}/details/edit" class="btn btn-warning"><span class="icon-settings icons icon"></span></a><a href="/so/{{$mix->so_detail_id}}/details/delete" class="btn btn-danger"><span class="icon-trash icons icon"></span></a></td>
                                              </tr>
                                              @endforeach
                                              @else
                                              <td colspan="7" class="text-center">No Data founded!</td>
                                              @endif
                                            </tbody>
                                              </table>
                                            </div>
                                  <div class="modal-footer">
                                    
                                    <button type="submit" class="btn btn-primary">Save Data</button>
                                  </div>
                                  <script type="text/javascript">
                                        
                                            var totalPrice = document.getElementById('total_price').onkeyup.value;
                                            var discPrice = document.getElementById('discount').onkeyup.value;
                                            var result = parseFloat(totalPrice) - (parseFloat(totalPrice) * parseFloat(discPrice));
                                            if (!isNaN(result)) {
                                                document.getElementById('grandtotal').value = result;
                                            }
                                  </script>
                                  </form>

                                   <!-- Modal #adddataItem -->
              <div class="modal fade bs-example-modal-lg" id="adddataItem" tabindex="-1" role="dialog" aria-labelledby="adddataItem">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <form action="/so/{{$data_so->so_id}}/details/additem" method="POST">
                    {{csrf_field()}}
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="adddataItem">Add Item Data on Sales Order No. {{$data_so->so_id}}</h4>
                      </div>
                      <div class="modal-body">
                          <div class="col-md-12 hidden">
                              <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" name="so_id" class="form-text" title="Sales Order ID Number" value="{{$data_so->so_id}}" disabled>
                                    <span class="bar"></span>
                                    <label for="so_id"></label>
                              </div>
                          </div>
                            <div class="col-md-6">
                            <div class="form-group form-animate-text dynamic" style="margin-top:40px !important;">
                                    Item<br>
                                    <form method="GET">
                                      <select name="item_id" id="item_id">
                                      <option>Select Item</option>
                                        @foreach ($itemList as $dtitem)
                                      <option value="{{$dtitem->item_id}}">{{$dtitem->item_name}}</option>
                                        @endforeach
                                      </select>
                                    </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" name="qty" id="qty" class="form-text" required>
                                  <span class="bar"></span>
                                  <label for="qty">Jumlah Item</label>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-top:40px; !important">
                          <div class="form-group form-animate-text">
                          <input type="text" class="form-text" name="price" id="price" required>
                                  <span class="bar"></span>
                                  <label for="price">Harga</label>
                          </div>
                        </div>
                        <div class="col-md-6" style="margin-top:40px; !important">
                            <div class="form-group form-animate-text">
                                <input type="text" value="" class="form-text" name="line_discount" id="line_discount" required>
                                <span class="bar"></span>
                                <label for="line_discount">Discount</label>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-top:20px; margin-bottom:20px; !important;">
                            <div class="form-group form-animate-text">
                                <input type="text" value="" onclick="getValue()" class="form-text" name="linetotal" id="linetotal">
                                <span class="bar"></span>
                                <label for="linetotal">Total Keseluruhan</label>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-top:20px; margin-bottom:20px; !important;">
                            <div class="form-group form-animate-text">
                                <input type="text" class="form-text" name="remarks" required>
                                <span class="bar"></span>
                                <label for="remarks">Catatan</label>
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
                <script type="text/javascript">
                  function getValue(){
                    var Harga = document.getElementById('price').value;
                  var Item = document.getElementById('qty').value;
                  var LineDisc = document.getElementById('line_discount').value;
                  var TotHarga = document.getElementById('linetotal');
                  var HitungTotal = (Item*Harga)-LineDisc;
                  // alert("Ini hasil perhitungannya"+ HitungTotal);
                    TotHarga.value = HitungTotal;
                  }
                </script>
@endsection
