@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Customer Management</h3></div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><span title="Add Customer" class="icon-plus icons icon text-right" data-toggle="modal" data-target="#addcustomer"></span></h3>
                          </div>
                      </div>
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                    @endif
                    <div class="panel-body">
                    <form action="/customer/{{$customer->customer_id}}/update" method="POST">
                            {{csrf_field()}}
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="addCustomer">Edit Customer Data</h4>
                              </div>
                              <div class="modal-body">
                                    <div class="col-md-6">
                                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" name="customer_code" class="form-text" value="{{$customer->customer_code}}" required>
                                            <span class="bar"></span>
                                            <label for="customer_code">Code Customer</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" name="customer_name" class="form-text" value="{{$customer->customer_name}}" required>
                                          <span class="bar"></span>
                                          <label for="customer_name">Nama Customer</label>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top:40px; !important">
                                  <div class="form-group form-animate-text">
                                  <input type="email" class="form-text" value="{{$customer->email}}" name="email" required>
                                  <span class="bar"></span>
                                  <label for="email">Email</label>
                                  </div>
                                </div>
                                <div class="col-md-6" style="margin-top:40px; !important">
                                      <div class="form-group form-animate-text">
                                          <input type="text" class="form-text" name="phone" value="{{$customer->phone}}" required>
                                          <span class="bar"></span>
                                          <label for="phone">Phone</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6" style="margin-top:40px !important">
                                      <div class="form-group form-animate-text">
                                          <input type="text" name="contact_person" id="contact_person" value="{{$customer->contact_person}}" class="form-text">
                                          <span class="bar"></span>
                                          <label for="contact_person">Contact Person</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6" style="margin-top:40px !important">
                                    <div class="form-group form-animate-text">
                                      <input type="text" name="address" id="address" class="form-text" value="{{$customer->address}}">
                                      <span class="bar"></span>
                                      <label for="address">Alamat lengkap</label>
                                    </div>
                                  </div>
                                  <div class="col-md-6" style="margin-top:40px !important">
                                    <div class="form-group form-animate-text">
                                      <input type="text" name="user_id" id="user_id" value="{{$customer->user_id}}" class="form-text">
                                      <span class="bar"></span>
                                      <label for="user_id">User ID</label>
                                    </div>
                                  </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                              </div>
                              </form>
                    </div>
@endsection
