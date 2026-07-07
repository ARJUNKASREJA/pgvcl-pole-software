@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card">

<div class="card-header">

<h4>Drawing Settings</h4>

</div>

<div class="card-body">

<form method="POST"
action="{{ route('drawing-settings.update') }}">

@csrf

@method('PUT')

<div class="mb-3">

<label>Company Name</label>

<input
type="text"
name="company_name"
class="form-control"
value="{{ $setting->company_name }}">

</div>

<div class="mb-3">

<label>Default Scale</label>

<input
type="text"
name="default_scale"
class="form-control"
value="{{ $setting->default_scale }}">

</div>

<button class="btn btn-primary">

Save Settings

</button>

</form>

</div>

</div>

</div>

@endsection