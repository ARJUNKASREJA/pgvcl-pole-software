
@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card">

<div class="card-header">

<h4>Upload Photo</h4>

</div>

<div class="card-body">

<form
action="{{ route('camera.store') }}"
method="POST"
enctype="multipart/form-data">

@csrf

@include('camera.form')

<button class="btn btn-primary">

Upload

</button>

</form>

</div>

</div>

</div>

@endsection