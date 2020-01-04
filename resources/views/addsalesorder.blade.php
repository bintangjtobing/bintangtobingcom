@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel form-element-padding">
            <div class="panel-heading">
                <h4>Sales Order - Add Data</h4>
            </div>
            <div class="panel-body" style="padding-bottom:30px;">
                <div class="col-md-6">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" required>
                            <span class="bar"></span>
                            <label for="so_number">Sales Order Number</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required>
                          <span class="bar"></span>
                          <label for="customer_id">Customer ID</label>
                    </div>
                </div>
                <div class="col-md-12">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text dateAnimate" required>
                          <span class="bar"></span>
                          <label for="so_date"><span class="fa fa-calendar"></span> Sales Order Date</label>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required>
                          <span class="bar"></span>
                          <label for="total_price">Total Harga</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group" style="margin-top:52px !important;">
                        <input type="text" class="form-control" placeholder="Discount" aria-describedby="basic-addon2" name="discount">
                        <span class="input-group-addon" id="basic-addon2">%</span>
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
