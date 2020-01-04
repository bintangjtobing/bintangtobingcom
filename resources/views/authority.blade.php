@extends('layouts.layout')
@section('content')
<!-- start: Content -->
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Authority Management</h3></div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <h3><a href="/add-authority"><span title="Add User" class="icon-plus icons icon text-right"></span></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Type</th>
                          <th>Title Level</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>administrator</td>
                          <td>Administrator</td>
                          <td><a href="#">Edit </a>| <a href="#">Delete</a></td>

                        </tr>
                        <tr>
                          <td>2</td>
                          <td>manager</td>
                          <td>Manager</td>
                          <td><a href="#">Edit </a>| <a href="#">Delete</a></td>
                        </tr>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
          <!-- end: content -->
@endsection
