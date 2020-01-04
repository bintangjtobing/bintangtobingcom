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
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                    @endif
                    <div class="panel-body">
                    <form action="/member/{{$member->id}}/update" method="POST">
                            {{csrf_field()}}
                              <div class="modal-header">
                                <h4 class="modal-title" id="addUserLabel">Edit User Data</h4>
                              </div>
                              <div class="modal-body">
                                    <div class="col-md-6">
                                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" name="username" class="form-text" value="{{$member->username}}" required>
                                            <span class="bar"></span>
                                            <label for="username">Username</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" name="fullname" class="form-text" value="{{$member->fullname}}" required>
                                          <span class="bar"></span>
                                          <label for="fullname">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top:40px; !important">
                                  <div class="form-group form-animate-text">
                                  <input type="email" class="form-text" name="email" value="{{$member->email}}" required>
                                  <span class="bar"></span>
                                  <label for="email">Email</label>
                                  </div>
                                </div>
                                <div class="col-md-6" style="margin-top:40px; margin-bottom:40px; !important">
                                    {{-- <div class="form-group form-animate-text">
                                    <input type="text" class="form-text" name="status" required> --}}
                                    <span class="bar"></span>
                                    <label for="status">Status</label>
                                    <div class="input-group">
                                        <div class="radio">
                                            <label class="radio-inline"><input type="radio" name="status" value="A" @if($member->status=='A') checked @endif>Actived</label>
                                            <label class="radio-inline"><input type="radio" name="status" value="C" @if($member->status=='C') checked @endif>Un-Actived</label>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                <div class="col-md-6">
                                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="password" class="form-text" id="validate_password" name="validate_password" value="{{$member->password}}" required>
                                    <input type="checkbox" onclick="myVisibilityToggle()"> Show Password
                                              <span class="bar"></span>
                                              <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="password" class="form-text" id="password" name="password" value="{{$member->password}}" required>
                                    <input type="checkbox" onclick="myVisibilityToggleConfirm()"> Show Password
                                              <span class="bar"></span>
                                              <label>Konfirmasi Password</label>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top:20px; margin-bottom:20px; !important;">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label text-left">Auth Type</label>
                                        <div class="col-md-10">
                                            <div class="col-md-12">
                                                <select name="type" id="type" class="form-control">
                                                    <option value="administrator" @if($member->type==['Administrator','administrator']) selected @endif>Administrator</option>
                                                    <option value="staff" @if($member->type=='staff') selected @endif>Staff</option>
                                                    <option value="seniorstaff" @if($member->type=='seniorstaff') selected @endif>Senior Staff</option>
                                                    <option value="manager" @if($member->type=='manager') selected @endif>Manager</option>
                                                    <option value="salesperson" @if($member->type=='salesperson') selected @endif>Sales Person</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Update Changes</button>
                              </div>
                              </form>
                  </div>
                </div>
              </div>
              </div>
@endsection
