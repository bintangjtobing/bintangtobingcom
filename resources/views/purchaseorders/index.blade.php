@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Purchase Order - View</h3></div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><span title="Add PO" class="icon-plus icons icon text-right" data-toggle="modal" data-target="#addpo"></span></h3>
                          </div>
                      </div>
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                    @endif
                    <div class="panel-body">
                      <div class="responsive-table">
                        <table id="datatables-example" class="table table-hover table-bordered" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Purchase Order Number</th>
                              <th>Supplier ID - Name</th>
                              <th>Purchase Order Date</th>
                              <th>Discount</th>
                              <th>Total Price</th>
                              {{-- <th>Generate Purchase Invoices</th> --}}
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          @if($data_po->isNotEmpty())
                              @foreach($data_po as $po)
                                 <tr>
                                    <td width="130"><a href="/purchase-orders/{{$po->po_id}}/details">{{$po->po_number}}</a></td>
                                 <td>{{$po->supplier_id}} - {{$po->supplier_name}}</td>
                                    <td>{{$po->po_date}}</td>
                                    <td>{{$po->discount}}</td>
                                    <td>{{$po->total_price}}</td>
                                 {{-- <td class="text-center"><form action="/purchase-orders/{{$po->po_id}}/generatesi" method="get"><button type="submit" class="btn btn-primary"><span class="icon-link icons icon"></span> Generate Invoice</button></form></td> --}}
                                    <td class="text-center"><a href="/purchase-orders/{{$po->po_id}}/edit" class="btn btn-warning"><span class="icon-settings icons icon"></span></a><a href="/purchase-orders/{{$po->po_id}}/delete" class="btn btn-danger"><span class="icon-trash icons icon"></span></a></td>
                                 </tr>
                                 @endforeach
                                 @else
                                 <td colspan="7" class="text-center">- No Data Founded -</td>
                          @endif
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>

              <!-- Modal #addso -->
              <div class="modal fade bs-example-modal-lg" id="addpo" tabindex="-1" role="dialog" aria-labelledby="addpoLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <form action="/purchase-orders/create" method="POST">
                    {{csrf_field()}}
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="addSOLabel">Add Purchase Order Data</h4>
                      </div>
                      <div class="modal-body">
                            <div class="col-md-6">
                              <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                       <input type="number" name="po_number" class="form-text" min="1" maxlength="10" required>
                                       <span class="bar"></span>
                                       <label for="po_number">Purchase Order Number</label>
                              </div>
                           </div>
                        <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  Supplier ID <br>
                                  <form method="get">
                                     <select name="supplier_id" id="supplier_id">
                                        <option selected>Select Supplier</option>
                                        @if(!$data_sup->isEmpty())
                                          @foreach($data_sup as $spo)
                                     <option value="{{$spo->supplier_id}}">{{$spo->supplier_name}}</option>
                                          @endforeach
                                          @else
                                          <option disabled>No data founded</option>
                                        @endif
                                     </select>
                                  </form>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top:40px; !important">
                              <div class="form-group form-animate-text">
                                    <input type="text" name="po_date" class="form-text dateAnimate" required>
                                    <span class="bar"></span>
                                    <label><span class="fa fa-calendar"></span> Purchase Order Date</label>
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
                                      <input type="number" min="1" maxlength="5" class="form-text" id="discount" name="discount" value="" required>
                                      <span class="bar"></span>
                                      <label for="discount">Discount</label>
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