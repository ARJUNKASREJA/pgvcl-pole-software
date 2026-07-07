<div class="row">

<div class="col-md-4 mb-3">

<label>Project</label>

<select
name="project_id"
class="form-select">

@foreach($projects as $project)

<option
value="{{ $project->id }}"
@selected(old('project_id',$gps->project_id??'')==$project->id)>

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
@selected(old('pole_id',$gps->pole_id??'')==$pole->id)>

{{ $pole->pole_no }}

</option>

@endforeach

</select>

</div>

<div class="col-md-4 mb-3">

<label>Latitude</label>

<input
name="latitude"
class="form-control"
value="{{ old('latitude',$gps->latitude??'') }}">

</div>

<div class="col-md-4 mb-3">

<label>Longitude</label>

<input
name="longitude"
class="form-control"
value="{{ old('longitude',$gps->longitude??'') }}">

</div>

<div class="col-md-4 mb-3">

<label>Accuracy</label>

<input
name="accuracy"
class="form-control"
value="{{ old('accuracy',$gps->accuracy??'') }}">

</div>

</div>