@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Sales Invoices - View</h3></div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><span title="Add User" class="icon-plus icons icon text-right" data-toggle="modal" data-target="#addsi"></span></h3>
                          </div>
                      </div>
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                    @endif
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="sitables" class="table table-hover table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Sales Invoices ID</th>
                          <th>Sales Invoices Number</th>
                          <th>Sales Order Number</th>
                          <th>Customer ID</th>
                          <th>Sales Invoices Date</th>
                          <th>Total Prices</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data_si as $siitem)
                        <tr>
                        <td>{{$siitem->si_id}}</td>
                          <td><a href="/sales-invoices/{{$siitem->si_id}}/report">{{$siitem->si_number}}</a></td>
                          <td>{{$siitem->so_numbers}}</td>
                          <td>{{$siitem->customer_name}}</td>
                          <td>{{$siitem->si_date}}</td>
                          <td>{{$siitem->grandtotal}}</td>
                          <td><a href="/sales-invoices/{{$siitem->si_id}}/edit" class="btn btn-warning"><span class="icon-settings icons icon"></span></a><a href="/sales-invoices/{{$siitem->si_id}}/delete" class="btn btn-danger"><span class="icon-trash icons icon"></span></a></td>
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
   $('#sitables').DataTable();
} );
               </script>
              <!-- Modal #addso -->
              <div class="modal fade bs-example-modal-lg" id="addsi" tabindex="-1" role="dialog" aria-labelledby="addsi">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                  <form action="/sales-invoices/create" method="POST">
                  {{csrf_field()}}
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="addSOLabel">Add Sales Invoices Data</h4>
                    </div>
                    <div class="modal-body">
                          <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" name="si_number" id="si_number" class="form-text" required>
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
                                        <option>Select Customer</option>
                                          @foreach ($data_customer as $datasi)
                                        <option value="{{$datasi->customer_id}}">{{$datasi->customer_name}}</option>
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
                                      <option>Select SO Number</option>
                                        @foreach ($data_so as $dataso)
                                      <option value="{{$dataso->so_number}}">{{$dataso->so_number}}</option>
                                        @endforeach
                                      </select>
                                    </form>
                            </div>
                            </div>
                      </div>
                      <div class="col-md-6" style="margin-top:40px; !important">
                          <div class="form-group form-animate-text">
                              <input type="text" class="form-text dateAnimate" name="si_date" id="si_date" required>
                              <span class="bar"></span>
                              <label><span class="fa fa-calendar"></span> Sales Invoice Date</label>
                            </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="total_price" name="total_price" value="" required>
                                    <span class="bar"></span>
                                    <label for="total_price">Total Price</label>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="discount" name="discount" value="" required>
                                    <span class="bar"></span>
                                    <label for="discount">Discount</label>
                          </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" id="grandtotal" name="grandtotal" onclick="hitung()" class="form-text">
                          <span class="bar"></span>
                          <label for="grandtotal">Total Harga Keseluruhan</label>
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
                function hitung(){
                  var Price = document.getElementById('total_price').value;
                var Disc = document.getElementById('discount').value;
                var Total = document.getElementById('grandtotal');
                var Hitung = Price - Disc;

                Total.value = Hitung;
                }
              </script>
@endsection
