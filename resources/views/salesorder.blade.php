@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Sales Order - View</h3></div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><a href="/add-sales-order"><span title="Add User" class="icon-plus icons icon text-right"></span></a></h3>
                          </div>
                      </div>
                    </div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Sales Order Number</th>
                          <th>Customer ID</th>
                          <th>Sales Order Date</th>
                          <th>Total Price</th>
                          <th>Discount</th>
                          <th>Remarks</th>
                          <th>Void</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($sales_order as $p)
                        <tr>
                          <td>{{$p->so_number}}</td>
                          <td>{{$p->customer_id}}</td>
                          <td>{{$p->so_date}}</td>
                          <td>{{$p->total_price}}</td>
                          <td>{{$p->discount}}</td>
                          <td>{{$p->remarks}}</td>
                          <td>{{$p->void}}</td>
                          <td>
                            <a href="/edit-sales-order/{{$p->so_id}}">Edit</a> | <a href="/delete/{{$p->so_id}}">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
@endsection
