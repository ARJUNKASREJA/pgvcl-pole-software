@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header">

<h4>Create Drawing</h4>

</div>

<div class="card-body">

<form
action="{{ route('drawings.store') }}"
method="POST">

@csrf

@include('drawings.form')

<button
class="btn btn-primary">

Save Drawing

</button>

</form>

</div>

</div>

</div>

@endsection