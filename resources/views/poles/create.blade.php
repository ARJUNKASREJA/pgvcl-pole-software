@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header">

<h4>Create Pole</h4>

</div>

<div class="card-body">

<form
action="{{ route('poles.store') }}"
method="POST">

@csrf

@include('poles.form')

<button class="btn btn-success">

Save Pole

</button>

</form>

</div>

</div>

</div>

@endsection