<div class="row">

    <div class="col-md-4 mb-3">

        <label>Project</label>

        <select
            name="project_id"
            class="form-select"
            required>

            <option value="">Select</option>

            @foreach($projects as $project)

            <option
                value="{{ $project->id }}"
                @selected(old('project_id',$pole->project_id ?? '')==$project->id)>

                {{ $project->project_name }}

            </option>

            @endforeach

        </select>

    </div>

    <div class="col-md-4 mb-3">

        <label>Pole No</label>

        <input
            type="text"
            name="pole_no"
            class="form-control"
            value="{{ old('pole_no',$pole->pole_no ?? '') }}">

    </div>

    <div class="col-md-4 mb-3">

        <label>Pole Type</label>

        <input
            type="text"
            name="pole_type"
            class="form-control"
            value="{{ old('pole_type',$pole->pole_type ?? '') }}">

    </div>

    <div class="col-md-4 mb-3">

        <label>Pole Height</label>

        <input
            type="text"
            name="pole_height"
            class="form-control"
            value="{{ old('pole_height',$pole->pole_height ?? '') }}">

    </div>

</div>