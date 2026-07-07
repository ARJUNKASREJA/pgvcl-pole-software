@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header">

<h4>Consumer Details</h4>

</div>

<div class="card-body">

<table class="table table-bordered">

<tr>

<th width="250">

Consumer No

</th>

<td>

{{ $consumer->consumer_no }}

</td>

</tr>

<tr>

<th>Name</th>

<td>

{{ $consumer->consumer_name }}

</td>

</tr>

<tr>

<th>Meter No</th>

<td>

{{ $consumer->meter_no }}

</td>

</tr>

<tr>

<th>Mobile</th>

<td>

{{ $consumer->mobile }}

</td>

</tr>

<tr>

<th>Pole</th>

<td>

{{ $consumer->pole?->pole_no }}

</td>

</tr>

<tr>

<th>Project</th>

<td>

{{ $consumer->project?->project_name }}

</td>

</tr>

<tr>

<th>Status</th>

<td>

@if($consumer->status)

<span class="badge bg-success">

Active

</span>

@else

<span class="badge bg-danger">

Inactive

</span>

@endif

</td>

</tr>

</table>

</div>

</div>

</div>

@endsection