@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header">

<h4>Create Consumer</h4>

</div>

<div class="card-body">

<form
action="{{ route('consumers.store') }}"
method="POST">

@csrf

@include('consumers.form')

<button
class="btn btn-primary">

Save Consumer

</button>

</form>

</div>

</div>

</div>

@endsection