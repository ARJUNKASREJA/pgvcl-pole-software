<div class="row">

<div class="col-md-4 mb-3">

<label>Project</label>

<select
name="project_id"
class="form-select">

@foreach($projects as $project)

<option
value="{{ $project->id }}"
@selected(old('project_id',$photo->project_id)==$project->id)>

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
@selected(old('pole_id',$photo->pole_id)==$pole->id)>

{{ $pole->pole_no }}

</option>

@endforeach

</select>

</div>

<div class="col-md-4 mb-3">

<label>Photo</label>

<input
type="file"
name="photo"
class="form-control">

</div>

<div class="col-md-12 mb-3">

<label>Remarks</label>

<textarea
name="remarks"
class="form-control">{{ old('remarks',$photo->remarks) }}</textarea>

</div>

</div>