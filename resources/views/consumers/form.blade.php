<div class="row">

<div class="col-md-4 mb-3">
    <label class="form-label">Project</label>
    <select name="project_id" class="form-select" required>
        @foreach($projects as $project)
            <option value="{{ $project->id }}" @selected(old('project_id', $consumer->project_id ?? '') == $project->id)>
                {{ $project->project_name }}
            </option>
        @endforeach
    </select>
</div>

<div class="col-md-4 mb-3">
    <label class="form-label">Pole</label>
    <select name="pole_id" class="form-select">
        <option value="">Select</option>
        @foreach($poles as $pole)
            <option value="{{ $pole->id }}" @selected(old('pole_id', $consumer->pole_id ?? '') == $pole->id)>
                {{ $pole->pole_no }}
            </option>
        @endforeach
    </select>
</div>

<div class="col-md-4 mb-3">
    <label class="form-label">Consumer No</label>
    <input name="consumer_no" class="form-control" value="{{ old('consumer_no', $consumer->consumer_no ?? '') }}" required>
</div>

<div class="col-md-4 mb-3">
    <label class="form-label">Consumer Name</label>
    <input name="consumer_name" class="form-control" value="{{ old('consumer_name', $consumer->consumer_name ?? '') }}" required>
</div>

<div class="col-md-4 mb-3">
    <label class="form-label">Meter No</label>
    <input name="meter_no" class="form-control" value="{{ old('meter_no', $consumer->meter_no ?? '') }}">
</div>

<div class="col-md-4 mb-3">
    <label class="form-label">Mobile No</label>
    <input name="mobile" class="form-control" value="{{ old('mobile', $consumer->mobile ?? '') }}">
</div>

<div class="col-md-4 mb-3">
    <label class="form-label">Phase</label>
    <input name="phase" class="form-control" value="{{ old('phase', $consumer->phase ?? '') }}">
</div>

<div class="col-md-4 mb-3">
    <label class="form-label">Connection Type</label>
    <input name="connection_type" class="form-control" value="{{ old('connection_type', $consumer->connection_type ?? '') }}">
</div>

<div class="col-md-4 mb-3">
    <label class="form-label">Load</label>
    <input name="load" class="form-control" value="{{ old('load', $consumer->load ?? '') }}">
</div>

<div class="col-md-4 mb-3">
    <label class="form-label">Status</label>
    <select name="status" class="form-select">
        <option value="1" @selected(old('status', $consumer->status ?? true))>Active</option>
        <option value="0" @selected(! old('status', $consumer->status ?? true))>Inactive</option>
    </select>
</div>

</div>