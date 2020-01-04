@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Purchase Order Data - Edit</h3></div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><span title="Add SO" class="icon-plus icons icon text-right" data-toggle="modal" data-target="#addso"></span></h3>
                          </div>
                      </div>
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                    @endif
                    <div class="panel-body">
                    <form action="/purchase-orders/{{$po->po_id}}/update" method="POST">
                           {{csrf_field()}}
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               <h4 class="modal-title" id="addSOLabel">Add Purchase Order Data</h4>
                             </div>
                             <div class="modal-body">
                                   <div class="col-md-6">
                                     <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                     <input type="number" name="po_number" class="form-text" minlength="1" maxlength="10" value="{{$po->po_number}}" required>
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
                                                 @foreach($data_po as $spo)
                                            <option value="{{$spo->supplier_id}}" @if($spo->supplier_id=='{{$spo->supplier_id}}') selected @endif>{{$spo->supplier_name}}</option>
                                                 @endforeach
                                            </select>
                                         </form>
                                   </div>
                               </div>
                               <div class="col-md-12" style="margin-top:40px; !important">
                                     <div class="form-group form-animate-text">
                                     <input type="text" name="po_date" class="form-text dateAnimate" value="{{$po->po_date}}" required>
                                           <span class="bar"></span>
                                           <label><span class="fa fa-calendar"></span> Purchase Order Date</label>
                                         </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                   <input type="text" class="form-text" id="total_price" name="total_price" value="{{$po->total_price}}" required>
                                             <span class="bar"></span>
                                             <label for="total_price">Total Price</label>
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                   <input type="number" min="1" maxlength="5" class="form-text" id="discount" name="discount" value="{{$po->discount}}" required>
                                             <span class="bar"></span>
                                             <label for="discount">Discount</label>
                                   </div>
                               </div>
                             <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                               <button type="submit" class="btn btn-primary">Save Data</button>
                             </div>
                             </form>
@endsection
