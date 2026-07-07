@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header">

<h4>Edit Drawing</h4>

</div>

<div class="card-body">

<form
action="{{ route('drawings.update',$drawing) }}"
method="POST">

@csrf

@method('PUT')

@include('drawings.form')

<button
class="btn btn-success">

Update Drawing

</button>

</form>

</div>

</div>

</div>

@endsection