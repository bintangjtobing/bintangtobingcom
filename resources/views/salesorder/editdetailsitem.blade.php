@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-12 col-sm-6 col-xs-6 text-left"><h3>Sales Order Item - Edit</h3></div>
                          <div class="col-md-12 col-sm-6 col-xs-6 text-right">
                            <h3><span title="Edit Item SO" class="icon-plus icons icon text-right"></span></h3>
                          </div>
                      </div>
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                    @endif
                    <div class="panel-body">
                    <form action="/so/{{$data_so->so_detail_id}}/details/update" method="POST">
                                {{csrf_field()}}
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="addSOLabel">Edit Sales Order Data Item</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="form-group form-animate-text dynamic" style="margin-top:40px !important;">
                                                Item<br>
                                                <form method="GET">
                                                  <select name="item_id" id="item_id">
                                                  <option>Select Item</option>
                                                    @foreach ($itemList as $dtitem)
                                                  <option value="{{$dtitem->item_id}}" @if($dtitem->item_id=='{{$dtitem->item_name}}') selected @endif>{{$dtitem->item_name}}</option>
                                                    @endforeach
                                                  </select>
                                                </form>
                                        </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        <input type="text" id="qty" name="qty" value="{{$data_so->qty}}" class="form-text" required>
                                              <span class="bar"></span>
                                              <label for="qty">Jumlah Item</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" name="price" id="price" class="form-text" value="{{$data_so->price}}">
                                            <span class="bar"></span>
                                            <label for="price">Harga Item</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        <input type="text" class="form-text" id="line_discount" name="line_discount" value="{{$data_so->line_discount}}" required>
                                                  <span class="bar"></span>
                                                  <label for="line_discount">Discount</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        <input type="text" class="form-text" id="linetotal" name="linetotal" value="{{$data_so->linetotal}}" onclick="ClickTotal()" required>
                                                  <span class="bar"></span>
                                                  <label for="linetotal">Total Harga</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        Catatan<br>
                                      <input type="text" value="{{$data_so->remarks}}" id="remarks" name="remarks" class="form-text">
                                        <span class="bar"></span>
                                      </div>
                                    </div>
                                  <div class="modal-footer">
                                    
                                    <button type="submit" class="btn btn-primary">Save Data</button>
                                  </div>
                                  <script type="text/javascript">
                                        function ClickTotal(){
                                            var kuantiti = document.getElementById('qty').value;
                                            var totalPrice = document.getElementById('price').value;
                                            var discPrice = document.getElementById('line_discount').value;
                                            var ColTotal = document.getElementById('linetotal');
                                            var result = (kuantiti*totalPrice)-discPrice;
                                            ColTotal.value = result;
                                        }
                                  </script>
                                  </form>
@endsection
