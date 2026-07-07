@extends('layouts.admin')

@section('content')

<div class="container">

<div class="card shadow">

<div class="card-header">

<h4>Drawing Details</h4>

</div>

<div class="card-body">

<table class="table table-bordered">

<tr>

<th width="220">Drawing No</th>

<td>{{ $drawing->drawing_no }}</td>

</tr>

<tr>

<th>Project</th>

<td>{{ $drawing->project->project_name }}</td>

</tr>

<tr>

<th>Pole</th>

<td>{{ $drawing->pole->pole_no }}</td>

</tr>

<tr>

<th>Drawing Type</th>

<td>{{ $drawing->drawing_type }}</td>

</tr>

<tr>

<th>SVG File</th>

<td>{{ $drawing->svg_file }}</td>

</tr>

<tr>

<th>DWG File</th>

<td>{{ $drawing->dwg_file }}</td>

</tr>

<tr>

<th>PDF File</th>

<td>{{ $drawing->pdf_file }}</td>

</tr>

<tr>

<th>Remarks</th>

<td>{{ $drawing->remarks }}</td>

</tr>

<tr>

<th>Status</th>

<td>

@if($drawing->status)

<span class="badge bg-success">Active</span>

@else

<span class="badge bg-danger">Inactive</span>

@endif

</td>

</tr>

</table>

</div>

</div>

</div>

@endsection