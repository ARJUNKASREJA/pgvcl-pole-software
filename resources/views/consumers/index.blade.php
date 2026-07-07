@extends('layouts.admin')

@section('content')

<div class="container">

<div class="d-flex justify-content-between mb-3">

<h3>Consumers</h3>

<a href="{{ route('consumers.create') }}"
class="btn btn-primary">

Add Consumer

</a>

</div>

<form>

<div class="row mb-3">

<div class="col-md-4">

<input
type="text"
name="search"
class="form-control"
value="{{ $search }}"
placeholder="Search Consumer">

</div>

<div class="col-md-2">

<button class="btn btn-success">

Search

</button>

</div>

</div>

</form>

<div class="card shadow">

<div class="table-responsive">

<table class="table table-bordered">

<thead>

<tr>

<th>#</th>

<th>Consumer No</th>

<th>Name</th>

<th>Pole</th>

<th>Project</th>

<th>Action</th>

</tr>

</thead>

<tbody>

@forelse($consumers as $consumer)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $consumer->consumer_no }}</td>

<td>{{ $consumer->consumer_name }}</td>

<td>{{ $consumer->pole?->pole_no }}</td>

<td>{{ $consumer->project?->project_name }}</td>

<td>

<a href="{{ route('consumers.show',$consumer) }}"
class="btn btn-info btn-sm">

View

</a>

<a href="{{ route('consumers.edit',$consumer) }}"
class="btn btn-warning btn-sm">

Edit

</a>

<form
action="{{ route('consumers.destroy',$consumer) }}"
method="POST"
class="d-inline">

@csrf

@method('DELETE')

<button
class="btn btn-danger btn-sm"
onclick="return confirm('Delete Consumer?')">

Delete

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="6" class="text-center">

No Record Found

</td>

</tr>

@endforelse

</tbody>

</table>

{{ $consumers->links() }}

</div>

</div>

</div>

@endsection