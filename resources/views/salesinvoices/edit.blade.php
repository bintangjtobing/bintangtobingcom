@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Sales Order - View</h3></div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><span title="Add SO" class="icon-plus icons icon text-right" data-toggle="modal" data-target="#addso"></span></h3>
                          </div>
                      </div>
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                    @endif
                    <div class="panel-body">
                    <form action="/sales-invoices/{{$data_si->si_id}}/update" method="POST">
                                {{csrf_field()}}
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="addSOLabel">Edit Sales Order Data</h4>
                                  </div>
                                  <div class="modal-body">
                                        <div class="col-md-12">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        <input type="text" name="si_number" value="{{$data_si->si_number}}" class="form-text" required>
                                                <span class="bar"></span>
                                                <label for="si_number">Sales Invoices Number</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-animate-text dynamic" style="margin-top:40px !important;">
                                                    Customer<br>
                                                    <form method="GET">
                                                      <select name="customer_id" id="customer_id">
                                                        @foreach ($data_customer as $datasi)
                                                      <option value="{{$datasi->customer_id}}" @if($datasi->customer_id=='{{$datasi->customer_id}}') selected @endif>{{$datasi->customer_name}}</option>
                                                        @endforeach
                                                      </select>
                                                    </form>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group form-animate-text dynamic" style="margin-top:40px !important;">
                                                  Sales Order Number<br>
                                                  <form method="GET">
                                                    <select name="so_numbers" id="so_numbers">
                                                      @foreach ($data_so as $dataso)
                                                    <option value="{{$dataso->so_number}}" @if($dataso->so_number=='{{$dataso->so_number}}') selected @endif>{{$dataso->so_number}}</option>
                                                      @endforeach
                                                    </select>
                                                  </form>
                                          </div>
                                          </div>
                                    </div>
                                    <div class="col-md-6" style="margin-top:40px; !important">
                                        <div class="form-group form-animate-text">
                                        <input type="text" class="form-text dateAnimate" value="{{$data_si->si_date}}" name="si_date" id="si_date" required>
                                            <span class="bar"></span>
                                            <label><span class="fa fa-calendar"></span> Sales Invoice Date</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        <input type="text" value="{{$data_si->total_price}}" class="form-text" id="total_price" name="total_price"required>
                                                  <span class="bar"></span>
                                                  <label for="total_price">Total Price</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        <input type="text" class="form-text" value="{{$data_si->discount}}" id="discount" name="discount" required>
                                                  <span class="bar"></span>
                                                  <label for="discount">Discount</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                      <input type="text" id="grandtotal" value="{{$data_si->grandtotal}}" name="grandtotal" onclick="hitung()" class="form-text">
                                        <span class="bar"></span>
                                        <label for="grandtotal">Total Harga Keseluruhan</label>
                                      </div>
                                    </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <script type="text/javascript">
                              function hitung(){
                                var Price = document.getElementById('total_price').value;
                              var Disc = document.getElementById('discount').value;
                              var Total = document.getElementById('grandtotal');
                              var Hitung = Price - Disc;
              
                              Total.value = Hitung;
                              }
                            </script>
@endsection
