@extends('layouts.layout')
@section('content')
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Users Data Management</h3></div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><span title="Add User" class="icon-user-follow icons icon text-right" data-toggle="modal" data-target="#adduser"></span></h3>
                          </div>
                      </div>
                      {{-- <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-8">
                          <form action="/member/search" method="GET">
                            <div class="form-group">
                              <input type="search" name="search" class="form-control" placeholder="Search data here...">
                              <span class="form-group-btn">
                                <button type="submit" class="btn btn-info">Search</button>
                              </span>
                            </div>
                          </form>
                        </div>
                      </div> --}}
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                    @endif
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="membertable" class="table table-hover table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Full Name</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Position</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                      @foreach($data_member as $member)
                        <tr>
                            <td>{{$member->fullname}}</td>
                            <td>{{$member->username}}</td>
                            <td>{{$member->email}}</td>
                            <td>{{$member->type}}</td>
                            <td>{{$member->status}}</td>
                        <td><a href="/member/{{$member->id}}/edit" class="btn btn-warning"><span class="icon-settings icons icon"></span></a><a href="/member/{{$member->id}}/delete" class="btn btn-danger"><span class="icon-trash icons icon"></span></a></td>
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
   $('#membertable').DataTable();
} );
               </script>
                            <!-- Modal #adduser -->
              <div class="modal fade bs-example-modal-lg" id="adduser" tabindex="-1" role="dialog" aria-labelledby="addUserLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                  <form action="/member/create" method="POST">
                  {{csrf_field()}}
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="addUserLabel">Add User Data</h4>
                    </div>
                    <div class="modal-body">
                          <div class="col-md-6">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" name="username" class="form-text" required>
                                  <span class="bar"></span>
                                  <label for="username">Username</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="text" name="fullname" class="form-text" required>
                                <span class="bar"></span>
                                <label for="fullname">Nama Lengkap</label>
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
                          <input type="text" class="form-text" name="status" value="C" placeholder="Status: Inactive" required disabled>
                          <span class="bar"></span>
                          </div>
                        </div>
                      <div class="col-md-12" style="margin-top:20px; margin-bottom:20px; !important;">
                          <div class="form-group">
                              <label class="col-md-2 control-label text-left">Auth Type</label>
                              <div class="col-md-10">
                                  <div class="col-md-12">
                                      <select name="type" id="type" class="form-control">
                                          <option value="staff">Staff</option>
                                          <option value="seniorstaff">Senior Staff</option>
                                          <option value="manager">Manager</option>
                                          <option value="salesperson">Sales Person</option>
                                      </select>
                                  </div>
                              </div>
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
