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
                      <div class="responsive-table">
                      <table id="customertable" class="table table-hover table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Customer Code</th>
                          <th>Customer Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Contact Person</th>
                          <th>Alamat</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data_customer as $cust)
                        <tr>
                        <td>{{$cust->customer_code}}</td>
                        <td>{{$cust->customer_name}}</td>
                        <td>{{$cust->email}}</td>
                        <td>{{$cust->phone}}</td>
                        <td>{{$cust->contact_person}}</td>
                        <td>{{$cust->address}}</td>
                        <td><a href="/customer/{{$cust->customer_id}}/edit" class="btn btn-warning"><span class="icon-settings icons icon"></span></a><a href="/customer/{{$cust->customer_id}}/delete" class="btn btn-danger"><span class="icon-trash icons icon"></span></a></td>
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
    $('#customertable').DataTable();
} );
                </script>
              <!-- Modal #addcustomer -->
              <div class="modal fade bs-example-modal-lg" id="addcustomer" tabindex="-1" role="dialog" aria-labelledby="addCustomer">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                      <form action="/customer/create" method="POST">
                      {{csrf_field()}}
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="addCustomer">Add Customer Data</h4>
                        </div>
                        <div class="modal-body">
                              <div class="col-md-6">
                              <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                      <input type="text" name="customer_code" class="form-text" required>
                                      <span class="bar"></span>
                                      <label for="customer_code">Code Customer</label>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" name="customer_name" class="form-text" required>
                                    <span class="bar"></span>
                                    <label for="customer_name">Nama Customer</label>
                              </div>
                          </div>
                          <div class="col-md-6" style="margin-top:40px; !important">
                            <div class="form-group form-animate-text">
                            <input type="email" class="form-text" name="email" required>
                            <span class="bar"></span>
                            <label for="email">Email</label>
                            </div>
                          </div>
                          <div class="col-md-6" style="margin-top:40px; !important">
                                <div class="form-group form-animate-text">
                                    <input type="text" class="form-text" name="phone" required>
                                    <span class="bar"></span>
                                    <label for="phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-top:40px !important">
                                <div class="form-group form-animate-text">
                                    <input type="text" name="contact_person" id="contact_person" class="form-text">
                                    <span class="bar"></span>
                                    <label for="contact_person">Contact Person</label>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-top:40px !important">
                              <div class="form-group form-animate-text">
                                <input type="text" name="address" id="address" class="form-text">
                                <span class="bar"></span>
                                <label for="address">Alamat lengkap</label>
                              </div>
                            </div>
                            <div class="col-md-6" style="margin-top:40px !important">
                              <div class="form-group form-animate-text">
                                <input type="text" name="user_id" id="user_id" class="form-text">
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
                    </div>
                  </div>
@endsection
