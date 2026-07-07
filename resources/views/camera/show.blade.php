@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header">

<h4>Camera Photo Details</h4>

</div>

<div class="card-body">

<div class="text-center mb-4">

<img
src="{{ asset('storage/'.$photo->photo) }}"
class="img-fluid rounded"
style="max-height:500px;">

</div>

<table class="table table-bordered">

<tr>
<th width="220">Project</th>
<td>{{ $photo->project->project_name }}</td>
</tr>

<tr>
<th>Pole</th>
<td>{{ $photo->pole->pole_no }}</td>
</tr>

<tr>
<th>Captured By</th>
<td>{{ $photo->user->name }}</td>
</tr>

<tr>
<th>Remarks</th>
<td>{{ $photo->remarks }}</td>
</tr>

<tr>
<th>Uploaded</th>
<td>{{ $photo->created_at }}</td>
</tr>

</table>

</div>

</div>

</div>

@endsection