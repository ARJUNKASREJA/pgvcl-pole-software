@extends('layouts.admin')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning">
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
                        <label>Project Name</label>
                        <input type="text"
                               name="project_name"
                               class="form-control"
                               value="{{ $project->project_name }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Project Code</label>
                        <input type="text"
                               name="project_code"
                               class="form-control"
                               value="{{ $project->project_code }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Division</label>
                        <input type="text"
                               name="division"
                               class="form-control"
                               value="{{ $project->division }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Subdivision</label>
                        <input type="text"
                               name="subdivision"
                               class="form-control"
                               value="{{ $project->subdivision }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Village</label>
                        <input type="text"
                               name="village"
                               class="form-control"
                               value="{{ $project->village }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Feeder</label>
                        <input type="text"
                               name="feeder"
                               class="form-control"
                               value="{{ $project->feeder }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Description</label>
                        <textarea name="description"
                                  rows="4"
                                  class="form-control">{{ $project->description }}</textarea>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Status</label>

                        <select name="status" class="form-select">

                            <option value="1" {{ $project->status ? 'selected' : '' }}>
                                Active
                            </option>

                            <option value="0" {{ !$project->status ? 'selected' : '' }}>
                                Inactive
                            </option>

                        </select>

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