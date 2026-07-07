<div class="row">

    <div class="col-md-4 mb-3">
        <label class="form-label">Project</label>

        <select
            name="project_id"
            class="form-select"
            required>

            <option value="">Select Project</option>

            @foreach($projects as $project)

                <option
                    value="{{ $project->id }}"
                    @selected(old('project_id',$surveySheet->project_id ?? '')==$project->id)>

                    {{ $project->project_code }}
                    -
                    {{ $project->project_name }}

                </option>

            @endforeach

        </select>

    </div>

    <div class="col-md-4 mb-3">

        <label class="form-label">

            Survey No

        </label>

        <input
            type="text"
            name="survey_no"
            class="form-control"
            value="{{ old('survey_no',$surveySheet->survey_no ?? '') }}"
            required>

    </div>

    <div class="col-md-4 mb-3">

        <label class="form-label">

            Pole No

        </label>

        <input
            type="text"
            name="pole_no"
            class="form-control"
            value="{{ old('pole_no',$surveySheet->pole_no ?? '') }}"
            required>

    </div>

</div>