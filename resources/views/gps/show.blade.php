@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header">

<h4>GPS Details</h4>

</div>

<div class="card-body">

<table class="table table-bordered">

<tr>

<th width="220">Project</th>

<td>{{ $gps->project->project_name }}</td>

</tr>

<tr>

<th>Pole</th>

<td>{{ $gps->pole->pole_no }}</td>

</tr>

<tr>

<th>Latitude</th>

<td>{{ $gps->latitude }}</td>

</tr>

<tr>

<th>Longitude</th>

<td>{{ $gps->longitude }}</td>

</tr>

<tr>

<th>Accuracy</th>

<td>{{ $gps->accuracy }}</td>

</tr>

<tr>

<th>Captured By</th>

<td>{{ $gps->user->name }}</td>

</tr>

<tr>

<th>Created</th>

<td>{{ $gps->created_at }}</td>

</tr>

</table>

</div>

</div>

</div>

@endsection