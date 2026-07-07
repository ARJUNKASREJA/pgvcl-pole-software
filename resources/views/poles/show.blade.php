@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h4>Pole Details</h4>

</div>

<div class="card-body">

<table class="table table-bordered">

<tr>

<th width="220">Pole Number</th>

<td>{{ $pole->pole_no }}</td>

</tr>

<tr>

<th>Pole Type</th>

<td>{{ $pole->pole_type }}</td>

</tr>

<tr>

<th>Pole Height</th>

<td>{{ $pole->pole_height }}</td>

</tr>

<tr>

<th>Latitude</th>

<td>{{ $pole->latitude }}</td>

</tr>

<tr>

<th>Longitude</th>

<td>{{ $pole->longitude }}</td>

</tr>

<tr>

<th>Status</th>

<td>

@if($pole->status)

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