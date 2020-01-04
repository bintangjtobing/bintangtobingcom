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
                      <div class="responsive-table">
                        <table id="sotables" class="table table-hover table-bordered" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>SO Number</th>
                              <th>Sales Order Date</th>
                              <th>Total Price</th>
                              <th>Discount</th>
                              <th>Grand Total</th>
                              <th>Sales Invoices</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          @if(!$data_so->isEmpty())
                            @foreach($data_so as $so)
                            <tr>
                                <td width="130"><a href="/so/{{$so->so_id}}/details">{{$so->so_number}}</a></td>
                                <td>{{$so->so_date}}</td>
                                <td>{{$so->total_price}}</td>
                                <td>{{$so->discount}}</td>
                                <td>{{$so->grandtotal}}</td>
                            <td class="text-center"><form action="/so/{{$so->so_id}}/generatesi" method="get"><button type="submit" class="btn btn-primary"><span class="icon-link icons icon"></span> Generate Invoice</button></form></td>
                                <td class="text-center"><a href="/so/{{$so->so_id}}/edit" class="btn btn-warning"><span class="icon-settings icons icon"></span></a><a href="/so/{{$so->so_id}}/delete" class="btn btn-danger"><span class="icon-trash icons icon"></span></a></td>
                            </tr>
                            @endforeach
                            @else
                            <td colspan="7" class="text-center">- No Data Founded! -</td>
                          @endif
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
              <script>
                  $(document).ready( function () {
   $('#sotables').DataTable();
} );
               </script>

              <!-- Modal #addso -->
              <div class="modal fade bs-example-modal-lg" id="addso" tabindex="-1" role="dialog" aria-labelledby="addSOLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                  <form action="/salesorder/create" method="POST">
                  {{csrf_field()}}
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="addSOLabel">Add Sales Order Data</h4>
                    </div>
                    <div class="modal-body">
                          <div class="col-md-6">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" name="so_number" class="form-text" required>
                                  <span class="bar"></span>
                                  <label for="so_number">Sales Order Number</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="text" name="customer_id" class="form-text" required>
                                <span class="bar"></span>
                                <label for="customer_id">Customer ID</label>
                          </div>
                      </div>
                      <div class="col-md-12" style="margin-top:40px; !important">
                          <div class="form-group">
                              <label for="dtp_input1" class="col-md-2 control-label">Order Date</label>
                              <div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                  <input class="form-control" size="16" type="text" value="" readonly>
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                              </div>
                      <input type="hidden" id="dtp_input1" value="" /><br/>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="total_price" name="total_price" value="" required>
                                    <span class="bar"></span>
                                    <label for="total_price">Total Price</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="discount" name="discount" value="" required>
                                    <span class="bar"></span>
                                    <label for="discount">Discount</label>
                          </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" id="grandtotal" name="grandtotal" class="form-text" disabled>
                          <span class="bar"></span>
                        </div>
                      </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                  </div>
                </div>
              </div>
@endsection
