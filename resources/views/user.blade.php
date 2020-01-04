@extends('layouts.layout')
@section('content')
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Users Data Management</h3></div>

                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><a href="/add-user"><span title="Add User" class="icon-user-follow icons icon text-right"></span></a></h3>
                          </div>
                      </div>
                    </div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>User ID</th>
                          <th>Full Name</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Position</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <!-- @foreach ($users as $p) -->
                        <tr>
                          <!-- <td>{{ $p->users }}</td>
                          <td>{{ $p->fullname }}</td>
                          <td>{{ $p->username }}</td>
                          <td>{{ $p->email }}</td>
                          <td>{{ $p->type }}</td>
                          <td>{{ $p->status }}</td> -->
                          <!-- <td><a href="#" class="btn btn-info btn-sm"></i> Edit</a>
                    <form action="{{action('UsersControllers@destroy', $data->id)}}" method="post" class="hapus" style="display:inline">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form></td> -->
                        </tr>
                        <!-- @endforeach -->
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
@endsection
