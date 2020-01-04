@extends('layouts.layout')
@section('content')
<div class                                                            = "col-md-12 top-20 padding-0">
                <div class                                            = "col-md-12">
                  <div class                                          = "panel">
                    <div class                                        = "panel-heading">
                      <div class                                      = "row">
                          <div class                                  = "col-md-6 col-sm-6 col-xs-6 text-left"><h3>Sales Order - Generate Sales Invoice</h3></div>
                          <div class                                  = "col-md-6 col-sm-6 col-xs-6 text-right">
                          </div>
                      </div>
                    </div>
                    @if(session('sukses'))
                    <div class                                        = "alert alert-success" role="alert">{{session('sukses')}}</div>
                    @endif
                    <div class                                        = "panel-body">
                  <form action                                      = "/so/{{$data_so->so_number}}/pgenerate" method="POST">
                                {{csrf_field()}}
                                  <div class                          = "modal-body">
                                        <div class                    = "col-sm-12">
                                          <div class                  = "form-row">
                                            <div class                = "form-group form-animate-text" style="margin-top:40px !important;">
                                              
                                                <input type           = "text" name="si_number" value="SI-{{$data_so->so_number}}" class="form-text" required readonly>
                                                        <span class   = "bar"></span>
                                                        <span>Sales Invoice Number</span>
                                                        
                                            </div>
                                            <div class                = "form-group form-animate-text" style="margin-top:40px !important;">
                                                <input type           = "text" name="so_numbers" value="{{$data_so->so_number}}" class="form-text" required readonly>
                                                      <span class     = "bar"></span>
                                                      <span>Sales Order Number</span>
                                            </div>
                                          </div>
                                        </div>
                                    <div class                        = "col-md-12">
                                        <div class                    = "form-group form-animate-text" style="margin-top:40px !important;">
                                        <input type                   = "text" name="customer_id" value="{{$data_so->customer_id}}" class="form-text" required readonly>
                                              <span class             = "bar"></span>
                                              <span>Customer ID</span>
                                        </div>
                                    </div>
                                    <div class                        = "col-md-12" style="margin-top:40px; !important">
                                      <div class                      = "form-group">
                                        <span>Sales Invoice Date</span>
                                        <div class                    = "input-group date">
                                         <div class                   = "input-group-addon">
                                                <span class           = "glyphicon glyphicon-th"></span>
                                            </div>
                                        <input placeholder            = "Choose order date..." value="{{$data_so->so_date}}" class="form-control datepicker" name="si_date" readonly>
                                        </div>
                                       </div>
                                    </div>
                                    <div class                        = "col-md-6">
                                        <div class                    = "form-group form-animate-text" style="margin-top:40px !important;">
                                        <input type                   = "text" class="form-text" id="total_price" name="total_price" value="{{$data_so->total_price}}" required readonly>
                                                  <span class         = "bar"></span>
                                                  <span>Total Price</span>
                                        </div>
                                    </div>
                                    <div class                        = "col-md-6">
                                        <div class                    = "form-group form-animate-text" style="margin-top:40px !important;">
                                        <input type                   = "text" class="form-text" id="discount" name="discount" value="{{$data_so->discount}}" required readonly>
                                                  <span class         = "bar"></span>
                                                  <span>Discount</span>
                                        </div>
                                    </div>
                                    <div class                        = "col-md-12">
                                      <div class                      = "form-group form-animate-text" style="margin-top:40px !important;">
                                        <span>Grand Total</span>
                                      <input type                     = "text" value="{{$data_so->grandtotal}}" onclick="ClickTotal()" id="grandtotal" name="grandtotal" class="form-text" readonly>
                                        <span class                   = "bar"></span>
                                      </div>
                                    </div>
                                  
                                  <script type                        = "text/javascript">
                                        function ClickTotal(){
                                            var totalPrice            = document.getElementById('total_price').value;
                                            var discPrice             = document.getElementById('discount').value;
                                            var ColTotal              = document.getElementById('grandtotal');
                                            var result                = totalPrice - discPrice;
                                            ColTotal.value            = result;
                                        }
                                  </script>
                                  <div class                          = "responsive-table">
                                    <table id                         = "datatables-example" class="table table-hover table-bordered" width="100%" cellspacing="0">
                                      <thead>
                                        <tr>
                                          <th>SO Detail ID</th>
                                          <th>Item Name</th>
                                          <th>Quantity</th>
                                          <th>Price</th>
                                          <th>Discount</th>
                                          <th>Total</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($data_detailso as $viewso)
                                        <tr>
                                        <td width                     = "130" name="so_detail_id">{{$viewso->so_detail_id}}</td>
                                        <td name                      = "item_id">@if($viewso->item_id){{$viewso->item_name}} @endif</td>
                                            <td name                  = "qty">{{$viewso->qty}}</td>
                                            <td name                  = "price">{{$viewso->price}}</td>
                                            <td name                  = "line_discount">{{$viewso->line_discount}}</td>
                                        <td name                      = "linetotal">{{$viewso->linetotal}}</td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class                          = "modal-footer">
                                  <button type                      = "submit" class="btn btn-primary">Generate Sales Invoices SI-{{$data_so->so_number}}</button>
                                  </div>
                                  </div>
                                </form>
                    </div>
                                  
@endsection
