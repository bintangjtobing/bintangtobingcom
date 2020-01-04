@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h3>Hello. What do you want to do right now, <strong>{{auth()->user()->fullname}}</strong>?</h3>
    </div>
  </div>
</div>
</body>
</html>
@endsection
