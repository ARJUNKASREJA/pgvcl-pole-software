@extends('layouts.admin')

@section('content')

<div class="container">

<div class="d-flex justify-content-between mb-3">

<h3>Camera Photos</h3>

<a
href="{{ route('camera.create') }}"
class="btn btn-primary">

Upload Photo

</a>

</div>

<table class="table table-bordered">

<thead>

<tr>

<th>#</th>

<th>Pole</th>

<th>Photo</th>

<th>Captured By</th>

<th>Action</th>

</tr>

</thead>

<tbody>

@foreach($photos as $photo)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $photo->pole->pole_no }}</td>

<td>

<img
src="{{ asset('storage/'.$photo->photo) }}"
width="80">

</td>

<td>{{ $photo->user->name }}</td>

<td>

<a
href="{{ route('camera.show',$photo) }}"
class="btn btn-info btn-sm">

View

</a>

</td>

</tr>

@endforeach

</tbody>

</table>

{{ $photos->links() }}

</div>

@endsection