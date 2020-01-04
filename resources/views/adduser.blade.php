@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel form-element-padding">
            <div class="panel-heading">
                <h4>Tambah pengguna disini.</h4>
            </div>
            <div class="panel-body" style="padding-bottom:30px;">
                <div class="col-md-6">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" required>
                            <span class="bar"></span>
                            <label for="username">Username</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required>
                          <span class="bar"></span>
                          <label for="fullname">Nama Lengkap</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_password" name="validate_password" required>
                              <span class="bar"></span>
                              <label for="password">Password</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_confirm_password" name="validate_confirm_password" required>
                              <span class="bar"></span>
                              <label>Konfirmasi Password</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group" style="margin-top:40px !important;">
                        <label class="col-md-2 control-label text-left">Auth Type</label>
                        <div class="col-md-10">
                            <div class="col-md-12 padding-0">
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
                <div class="col-md-12">
                    <div class="form-group form-animate-checkbox" style="margin-top:40px !important;">
                        <input type="submit" value="Submit" class="submit btn btn-primary">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
