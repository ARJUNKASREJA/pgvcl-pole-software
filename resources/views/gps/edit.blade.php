@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card">

<div class="card-header">

<h4>Edit GPS</h4>

</div>

<div class="card-body">

<form
method="POST"
action="{{ route('gps.update',$gps) }}">

@csrf

@method('PUT')

@include('gps.form')

<button
class="btn btn-success">

Update GPS

</button>

</form>

</div>

</div>

</div>

@endsection