@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Supplier - Edit</h3></div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><span title="Add SO" class="icon-plus icons icon text-right" data-toggle="modal" data-target="#addso"></span></h3>
                          </div>
                      </div>
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                    @endif
                    <div class="panel-body">
                    <form action="/supplier/{{$supplier->supplier_id}}/update" method="POST">
                           {{csrf_field()}}
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               <h4 class="modal-title" id="addsupLabel">Add Supplier Data</h4>
                             </div>
                             <div class="modal-body">
                                   <div class="col-md-6">
                                   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                   <input type="number" name="supplier_code" class="form-text" minlength="1" maxlength="10" value="{{$supplier->supplier_code}}" required>
                                           <span class="bar"></span>
                                           <label for="supplier_code">Supplier Code</label>
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                   <input type="text" name="supplier_name" class="form-text" value="{{$supplier->supplier_name}}" required>
                                        <span class="bar"></span>
                                        <label for="supplier_name">Supplier Name</label>
                                   </div>
                               </div>
                               <div class="col-md-6" style="margin-top:40px; !important">
                                     <div class="form-group form-animate-text">
                                     <input type="email" name="email" class="form-text" value="{{$supplier->email}}" required>
                                           <span class="bar"></span>
                                           <label for="email">Email</label>
                                     </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                   <input type="text" class="form-text" id="contact_person" name="contact_person" value="{{$supplier->contact_person}}" required>
                                             <span class="bar"></span>
                                             <label for="contact_person">Contact Person</label>
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                   <input type="number" min="1" maxlength="12" class="form-text" id="phone" name="phone" value="{{$supplier->phone}}" required>
                                             <span class="bar"></span>
                                             <label for="phone">Phone</label>
                                   </div>
                               </div>
                             <div class="modal-footer">
                              
                               <button type="submit" class="btn btn-primary">Update Data</button>
                             </div>
                             </form>
@endsection
