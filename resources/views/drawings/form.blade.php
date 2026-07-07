<div class="row">

<div class="col-md-4 mb-3">

<label>Project</label>

<select
name="project_id"
class="form-select">

@foreach($projects as $project)

<option
value="{{ $project->id }}"
@selected(old('project_id',$drawing->project_id)==$project->id)>

{{ $project->project_name }}

</option>

@endforeach

</select>

</div>

<div class="col-md-4 mb-3">

<label>Pole</label>

<select
name="pole_id"
class="form-select">

@foreach($poles as $pole)

<option
value="{{ $pole->id }}"
@selected(old('pole_id',$drawing->pole_id)==$pole->id)>

{{ $pole->pole_no }}

</option>

@endforeach

</select>

</div>

<div class="col-md-4 mb-3">

<label>Drawing No</label>

<input
name="drawing_no"
class="form-control"
value="{{ old('drawing_no',$drawing->drawing_no) }}">

</div>

<div class="col-md-4 mb-3">

<label>Drawing Type</label>

<input
name="drawing_type"
class="form-control"
value="{{ old('drawing_type',$drawing->drawing_type) }}">

</div>

<div class="col-md-8 mb-3">

<label>Remarks</label>

<textarea
name="remarks"
class="form-control">{{ old('remarks',$drawing->remarks) }}</textarea>

</div>

</div>