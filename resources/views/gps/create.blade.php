@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card">

<div class="card-header">

<h4>Add GPS</h4>

</div>

<div class="card-body">

<form
method="POST"
action="{{ route('gps.store') }}">

@csrf

@include('gps.form')

<button
class="btn btn-primary">

Save GPS

</button>

</form>

</div>

</div>

</div>

@endsection