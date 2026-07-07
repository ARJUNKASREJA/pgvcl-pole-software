@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card">

<div class="card-header">

<h4>Edit Photo</h4>

</div>

<div class="card-body">

<form
action="{{ route('camera.update',$photo) }}"
method="POST"
enctype="multipart/form-data">

@csrf

@method('PUT')

@include('camera.form')

<button class="btn btn-success">

Update

</button>

</form>

</div>

</div>

</div>

@endsection