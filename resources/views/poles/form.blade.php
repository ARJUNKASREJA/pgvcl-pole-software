<div class="row">

    <div class="col-md-4 mb-3">
        <label class="form-label">Project</label>
        <select name="project_id" class="form-select" required>
            <option value="">Select</option>
            @foreach($projects as $project)
                <option value="{{ $project->id }}" @selected(old('project_id', $pole->project_id ?? '') == $project->id)>
                    {{ $project->project_name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Survey Sheet</label>
        <select name="survey_sheet_id" class="form-select">
            <option value="">Select</option>
            @foreach(
                App\Models\SurveySheet::orderBy('survey_no')->get() as $surveySheet
            )
                <option value="{{ $surveySheet->id }}" @selected(old('survey_sheet_id', $pole->survey_sheet_id ?? '') == $surveySheet->id)>
                    {{ $surveySheet->survey_no }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Consumer</label>
        <select name="consumer_id" class="form-select">
            <option value="">Select</option>
            @foreach(App\Models\Consumer::orderBy('consumer_no')->get() as $consumer)
                <option value="{{ $consumer->id }}" @selected(old('consumer_id', $pole->consumer_id ?? '') == $consumer->id)>
                    {{ $consumer->consumer_no }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Pole No</label>
        <input type="text" name="pole_no" class="form-control" value="{{ old('pole_no', $pole->pole_no ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Pole Type</label>
        <input type="text" name="pole_type" class="form-control" value="{{ old('pole_type', $pole->pole_type ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Pole Height</label>
        <input type="text" name="pole_height" class="form-control" value="{{ old('pole_height', $pole->pole_height ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Pole Material</label>
        <input type="text" name="pole_material" class="form-control" value="{{ old('pole_material', $pole->pole_material ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Pole Capacity</label>
        <input type="text" name="pole_capacity" class="form-control" value="{{ old('pole_capacity', $pole->pole_capacity ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Village</label>
        <input type="text" name="village" class="form-control" value="{{ old('village', $pole->village ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Feeder</label>
        <input type="text" name="feeder" class="form-control" value="{{ old('feeder', $pole->feeder ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Latitude</label>
        <input type="text" name="latitude" class="form-control" value="{{ old('latitude', $pole->latitude ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Longitude</label>
        <input type="text" name="longitude" class="form-control" value="{{ old('longitude', $pole->longitude ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Google Maps Link</label>
        <input type="url" name="google_maps_link" class="form-control" value="{{ old('google_maps_link', $pole->google_maps_link ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select">
            <option value="1" @selected(old('status', $pole->status ?? true))>Active</option>
            <option value="0" @selected(! old('status', $pole->status ?? true))>Inactive</option>
        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">QR Code Ready</label>
        <select name="qr_code_ready" class="form-select">
            <option value="1" @selected(old('qr_code_ready', $pole->qr_code_ready ?? false))>Yes</option>
            <option value="0" @selected(! old('qr_code_ready', $pole->qr_code_ready ?? false))>No</option>
        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Import Ready</label>
        <select name="import_ready" class="form-select">
            <option value="1" @selected(old('import_ready', $pole->import_ready ?? false))>Yes</option>
            <option value="0" @selected(! old('import_ready', $pole->import_ready ?? false))>No</option>
        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Export Ready</label>
        <select name="export_ready" class="form-select">
            <option value="1" @selected(old('export_ready', $pole->export_ready ?? false))>Yes</option>
            <option value="0" @selected(! old('export_ready', $pole->export_ready ?? false))>No</option>
        </select>
    </div>

</div>