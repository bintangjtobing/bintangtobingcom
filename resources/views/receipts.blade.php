@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Receipts</h3></div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><a href="/add-sales-invoices"><span title="Add User" class="icon-plus icons icon text-right"></span></a></h3>
                          </div>
                      </div>
                    </div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Receipt ID</th>
                          <th>Receipt Number</th>
                          <th>Receipt Date</th>
                          <th>Supplier ID</th>
                          <th>Purchase Invoice ID</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>00001</td>
                          <td>0100-BST</td>
                          <td>16/06/2019</td>
                          <td>09090909</td>
                          <td>01/01/01/BST</td>
                          <td>Rp.3000.000</td>
                        </tr>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
@endsection
