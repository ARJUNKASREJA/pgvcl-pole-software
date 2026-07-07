@extends('layouts.admin')

@section('content')

<div class="container">

<div class="d-flex justify-content-between mb-3">

<h3>Pole Master</h3>

<a href="{{ route('poles.create') }}"
class="btn btn-primary">

Add Pole

</a>

</div>

<form>

<div class="row mb-3">

<div class="col-md-4">

<input
name="search"
value="{{ $search }}"
class="form-control"
placeholder="Search Pole">

</div>

<div class="col-md-2">

<button class="btn btn-success">

Search

</button>

</div>

</div>

</form>

<div class="card">

<div class="table-responsive">

<table class="table table-bordered">

<thead>

<tr>

<th>#</th>

<th>Pole</th>

<th>Type</th>

<th>Height</th>

<th>Project</th>

<th>Status</th>

<th width="180">

Action

</th>

</tr>

</thead>

<tbody>

@foreach($poles as $pole)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $pole->pole_no }}</td>

<td>{{ $pole->pole_type }}</td>

<td>{{ $pole->pole_height }}</td>

<td>{{ $pole->project?->project_name }}</td>

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

<td>

<a
href="{{ route('poles.show',$pole) }}"
class="btn btn-info btn-sm">

View

</a>

<a
href="{{ route('poles.edit',$pole) }}"
class="btn btn-warning btn-sm">

Edit

</a>

<form
action="{{ route('poles.destroy',$pole) }}"
method="POST"
class="d-inline">

@csrf

@method('DELETE')

<button
onclick="return confirm('Delete?')"
class="btn btn-danger btn-sm">

Delete

</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

{{ $poles->links() }}

</div>

</div>

</div>

@endsection