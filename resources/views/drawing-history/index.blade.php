@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card">

<div class="card-header">

<h4>Drawing History</h4>

</div>

<div class="card-body">

<table class="table table-bordered">

<thead>

<tr>

<th>ID</th>

<th>Drawing</th>

<th>User</th>

<th>Action</th>

<th>Date</th>

</tr>

</thead>

<tbody>

@foreach($histories as $history)

<tr>

<td>{{ $history->id }}</td>

<td>{{ $history->drawing->drawing_no }}</td>

<td>{{ $history->user->name }}</td>

<td>{{ $history->action }}</td>

<td>{{ $history->created_at }}</td>

</tr>

@endforeach

</tbody>

</table>

{{ $histories->links() }}

</div>

</div>

</div>

@endsection