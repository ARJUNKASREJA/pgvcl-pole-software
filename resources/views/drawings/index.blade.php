@extends('layouts.admin')

@section('content')

<div class="container">

<div class="d-flex justify-content-between mb-3">

<h3>Drawing List</h3>

<a
href="{{ route('drawings.create') }}"
class="btn btn-primary">

New Drawing

</a>

</div>

<table class="table table-bordered">

<thead>

<tr>

<th>#</th>

<th>Drawing No</th>

<th>Pole</th>

<th>Type</th>

<th>Status</th>

<th>Action</th>

</tr>

</thead>

<tbody>

@foreach($drawings as $drawing)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $drawing->drawing_no }}</td>

<td>{{ $drawing->pole->pole_no }}</td>

<td>{{ $drawing->drawing_type }}</td>

<td>

@if($drawing->status)

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
href="{{ route('drawings.show',$drawing) }}"
class="btn btn-info btn-sm">

View

</a>

</td>

</tr>

@endforeach

</tbody>

</table>

{{ $drawings->links() }}

</div>

@endsection