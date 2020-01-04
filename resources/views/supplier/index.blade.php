@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Supplier Data - View</h3></div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><span title="Add Supplier" class="icon-plus icons icon text-right" data-toggle="modal" data-target="#addsup"></span></h3>
                          </div>
                      </div>
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                    @endif
                    <div class="panel-body">
                      <div class="responsive-table">
                        <table id="suppliertable" class="table table-hover table-bordered" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Supplier ID</th>
                              <th>Supplier Code - Name</th>
                              <th>Email</th>
                              <th>Contact Person</th>
                              <th>Phone Number</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          @if(!$data_sup->isEmpty())
                              @foreach($data_sup->sortBy('supplier_id') as $sup)
                                 <tr>
                                    <td width="130">{{$sup->supplier_id}}</td>
                                 <td>{{$sup->supplier_code}} - {{$sup->supplier_name}}</td>
                                    <td>{{$sup->email}}</td>
                                    <td>{{$sup->contact_person}}</td>
                                    <td>{{$sup->phone}}</td>
                                    <td class="text-center"><a href="/supplier/{{$sup->supplier_id}}/edit" class="btn btn-warning"><span class="icon-settings icons icon"></span></a><a href="/supplier/{{$sup->supplier_id}}/delete" class="btn btn-danger"><span class="icon-trash icons icon"></span></a></td>
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
              <script>
                  $(document).ready( function () {
   $('#suppliertable').DataTable();
} );
               </script>
              <!-- Modal #addso -->
              <div class="modal fade bs-example-modal-lg" id="addsup" tabindex="-1" role="dialog" aria-labelledby="addsupLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <form action="/supplier/create" method="POST">
                    {{csrf_field()}}
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="addsupLabel">Add Supplier Data</h4>
                      </div>
                      <div class="modal-body">
                            <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="number" name="supplier_code" class="form-text" min="1" maxlength="10" required>
                                    <span class="bar"></span>
                                    <label for="supplier_code">Supplier Code</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                 <input type="text" name="supplier_name" class="form-text" required>
                                 <span class="bar"></span>
                                 <label for="supplier_name">Supplier Name</label>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-top:40px; !important">
                              <div class="form-group form-animate-text">
                                    <input type="email" name="email" class="form-text" required>
                                    <span class="bar"></span>
                                    <label for="email">Email</label>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                      <input type="text" class="form-text" id="contact_person" name="contact_person" value="" required>
                                      <span class="bar"></span>
                                      <label for="contact_person">Contact Person</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                      <input type="number" min="1" maxlength="12" class="form-text" id="phone" name="phone" value="" required>
                                      <span class="bar"></span>
                                      <label for="phone">Phone</label>
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