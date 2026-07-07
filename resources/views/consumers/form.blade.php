<div class="row">

<div class="col-md-4 mb-3">

<label>Project</label>

<select
name="project_id"
class="form-select">

@foreach($projects as $project)

<option
value="{{ $project->id }}"
@selected(old('project_id',$consumer->project_id??'')==$project->id)>

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

<option value="">Select</option>

@foreach($poles as $pole)

<option
value="{{ $pole->id }}"
@selected(old('pole_id',$consumer->pole_id??'')==$pole->id)>

{{ $pole->pole_no }}

</option>

@endforeach

</select>

</div>

<div class="col-md-4 mb-3">

<label>Consumer No</label>

<input
name="consumer_no"
class="form-control"
value="{{ old('consumer_no',$consumer->consumer_no??'') }}">

</div>

<div class="col-md-6 mb-3">

<label>Name</label>

<input
name="consumer_name"
class="form-control"
value="{{ old('consumer_name',$consumer->consumer_name??'') }}">

</div>

<div class="col-md-6 mb-3">

<label>Meter No</label>

<input
name="meter_no"
class="form-control"
value="{{ old('meter_no',$consumer->meter_no??'') }}">

</div>

</div>