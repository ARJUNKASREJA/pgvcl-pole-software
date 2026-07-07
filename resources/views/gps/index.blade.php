@extends('layouts.admin')

@section('content')

<div class="container">

<div class="d-flex justify-content-between mb-3">

<h3>GPS Locations</h3>

<a
href="{{ route('gps.create') }}"
class="btn btn-primary">

Capture GPS

</a>

</div>

<table class="table table-bordered">

<thead>

<tr>

<th>#</th>

<th>Pole</th>

<th>Latitude</th>

<th>Longitude</th>

<th>Accuracy</th>

<th>Action</th>

</tr>

</thead>

<tbody>

@foreach($locations as $gps)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $gps->pole->pole_no }}</td>

<td>{{ $gps->latitude }}</td>

<td>{{ $gps->longitude }}</td>

<td>{{ $gps->accuracy }}</td>

<td>

<a
href="{{ route('gps.show',$gps) }}"
class="btn btn-info btn-sm">

View

</a>

</td>

</tr>

@endforeach

</tbody>

</table>

{{ $locations->links() }}

</div>

@endsection