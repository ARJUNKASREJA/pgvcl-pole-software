@extends('layouts.admin')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Create New Project</h4>
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

            <form action="{{ route('projects.store') }}" method="POST">

                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Project Name</label>
                        <input
                            type="text"
                            name="project_name"
                            class="form-control"
                            value="{{ old('project_name') }}"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Project Code</label>
                        <input
                            type="text"
                            name="project_code"
                            class="form-control"
                            value="{{ old('project_code') }}"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Division</label>
                        <input
                            type="text"
                            name="division"
                            class="form-control"
                            value="{{ old('division') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Subdivision</label>
                        <input
                            type="text"
                            name="subdivision"
                            class="form-control"
                            value="{{ old('subdivision') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Village</label>
                        <input
                            type="text"
                            name="village"
                            class="form-control"
                            value="{{ old('village') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Feeder</label>
                        <input
                            type="text"
                            name="feeder"
                            class="form-control"
                            value="{{ old('feeder') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">DTC</label>
                        <input
                            type="text"
                            name="dtc"
                            class="form-control"
                            value="{{ old('dtc') }}"
                            required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea
                            name="description"
                            rows="4"
                            class="form-control">{{ old('description') }}</textarea>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Status</label>

                        <select name="status" class="form-select">
                            <option value="1" {{ old('status',1)==1 ? 'selected' : '' }}>
                                Active
                            </option>

                            <option value="0" {{ old('status')==='0' ? 'selected' : '' }}>
                                Inactive
                            </option>
                        </select>

                    </div>

                </div>

                <button type="submit" class="btn btn-success">
                    Save Project
                </button>

                <a href="{{ route('projects.index') }}" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>

@endsection