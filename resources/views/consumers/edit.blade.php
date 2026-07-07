@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card">

<div class="card-header">

<h4>Edit Consumer</h4>

</div>

<div class="card-body">

<form
action="{{ route('consumers.update',$consumer) }}"
method="POST">

@csrf

@method('PUT')

@include('consumers.form')

<button
class="btn btn-success">

Update

</button>

</form>

</div>

</div>

</div>

@endsection