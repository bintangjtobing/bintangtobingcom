@extends('layouts.layout')
@section('content')
<!-- start: Content -->
<div class="panel invoice-v1-content">
    <div class="panel-body">
        <div class="col-md-12 invoice-v1-header">
          <div class="col-md-12">
          <h1><b>INVOICE #{{$data_si->si_number}}</b></h1>
          </div>
          <div class="col-md-12">
            <h4>
            <address>
              <strong>Invoice #: {{$data_si->si_number}}</strong><br>
            Created: {{$data_si->created_by}}<br>
              Due: <br>
            </address>
            </h4>
          </div>
        </div>
        <div class="col-md-12">
            {{-- <div class="col-md-6">
                <h4>
                <address>
                  <strong>Miminium, Inc.</strong><br>
                  1234 Mimin Street, Suite 900<br>
                  Miminium City, CA 94103<br>
                  <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
                </h4>
            </div> --}}
            <div class="col-md-12 text-right">
                <h4>
                <address>
                  <strong>Infinity Solutions</strong><br>
                {{auth()->user()->fullname}}<br>
                {{auth()->user()->email}}<br>
                </address>
                </h4>
            </div>
        </div>
        <div class="col-md-12 padding-0">
            <div class="responsive-table">
                
               <table class="table table-striped">
                <tr>
                    <th>#</th>
                  <th>Item</th>
                  <th>Qty</th>
                  <th>Price</th>
                  <th>Total</th>
                </tr>
                @foreach($data_sid as $sid_data)
                <tr>
                <td>{{$sid_data->si_detail_id}}</td>
                <td>@if($sid_data->item_id)
                      {{$sid_data->item_name}}
                  @endif</td>
                  <td id="jumlah">{{$sid_data->qty}}</td>
                  <td id="harga">{{$sid_data->price}}</td>
                <td id="linetotal">{{$sid_data->linetotal}}</td>
                </tr>
                <tr>
                  <th colspan="4">Total</th>
                <td>{{$sid_data->grandtotal}}</td>
                </tr>
                @endforeach
                
            </table>
            </div>
        </div>
    </div>
</div>
<!-- end: content -->
@endsection