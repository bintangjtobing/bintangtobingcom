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
                    <form action="/so/{{$data_so->so_id}}/update" method="POST">
                                {{csrf_field()}}
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="addSOLabel">Edit Sales Order Data</h4>
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
                                        <input type="text" name="customer_id" value="{{$data_so->customer_id}}" class="form-text" required>
                                              <span class="bar"></span>
                                              <label for="customer_id">Customer ID</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top:40px; !important">
                                      <div class="form-group">
                                        <label>Order Date</label>
                                        <div class="input-group date">
                                         <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        <input placeholder="Choose order date..." value="{{$data_so->so_date}}" class="form-control datepicker" name="so_date">
                                        </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        <input type="text" class="form-text" id="total_price" name="total_price" value="{{$data_so->total_price}}" required>
                                                  <span class="bar"></span>
                                                  <label for="total_price">Total Price</label>
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
                                        Grand Total<br>
                                      <input type="text" value="{{$data_so->grandtotal}}" onclick="ClickTotal()" id="grandtotal" name="grandtotal" class="form-text">
                                        <span class="bar"></span>
                                      </div>
                                    </div>
                                  <div class="modal-footer">
                                    
                                    <button type="submit" class="btn btn-primary">Save Data</button>
                                  </div>
                                  <script type="text/javascript">
                                        function ClickTotal(){
                                            var totalPrice = document.getElementById('total_price').value;
                                            var discPrice = document.getElementById('discount').value;
                                            var ColTotal = document.getElementById('grandtotal');
                                            var result = totalPrice - discPrice;
                                            ColTotal.value = result;
                                        }
                                  </script>
                                  </form>
@endsection
