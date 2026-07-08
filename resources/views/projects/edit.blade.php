@extends('layouts.admin')

@section('title','Edit Project')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm">

        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">Edit Project</h4>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('projects.update',$project->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Project Name</label>
                        <input type="text"
                               name="project_name"
                               class="form-control"
                               value="{{ old('project_name', $project->project_name) }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Project Code</label>
                        <input type="text"
                               name="project_code"
                               class="form-control"
                               value="{{ old('project_code', $project->project_code) }}"
                               readonly>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Division</label>
                        <input type="text"
                               name="division"
                               class="form-control"
                               value="{{ old('division', $project->division) }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Subdivision</label>
                        <input type="text"
                               name="subdivision"
                               class="form-control"
                               value="{{ old('subdivision', $project->subdivision) }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Village</label>
                        <input type="text"
                               name="village"
                               class="form-control"
                               value="{{ old('village', $project->village) }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Feeder</label>
                        <input type="text"
                               name="feeder"
                               class="form-control"
                               value="{{ old('feeder', $project->feeder) }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">DTC</label>
                        <input type="text"
                               name="dtc"
                               class="form-control"
                               value="{{ old('dtc', $project->dtc) }}"
                               required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Status</label>

                        <select name="status" class="form-select">

                            <option value="1" {{ old('status', $project->status) ? 'selected' : '' }}>
                                Active
                            </option>

                            <option value="0" {{ old('status', $project->status) ? '' : 'selected' }}>
                                Inactive
                            </option>

                        </select>

                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description"
                                  rows="4"
                                  class="form-control">{{ old('description', $project->description) }}</textarea>
                    </div>

                </div>

                <button class="btn btn-success">
                    Update Project
                </button>

                <a href="{{ route('projects.index') }}"
                   class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>

@endsection