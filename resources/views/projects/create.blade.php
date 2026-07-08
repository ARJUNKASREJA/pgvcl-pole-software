@extends('layouts.admin')

@section('title','Create Project')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">
                Create New Project
            </h4>

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

                        <label>Project Name</label>

                        <input
                            type="text"
                            name="project_name"
                            class="form-control"
                            value="{{ old('project_name') }}"
                            required>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label>Division</label>

                        <input
                            type="text"
                            name="division"
                            class="form-control"
                            value="{{ old('division') }}"
                            required>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label>Sub Division</label>

                        <input
                            type="text"
                            name="subdivision"
                            class="form-control"
                            value="{{ old('subdivision') }}"
                            required>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label>Village</label>

                        <input
                            type="text"
                            name="village"
                            class="form-control"
                            value="{{ old('village') }}"
                            required>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label>Feeder</label>

                        <input
                            type="text"
                            name="feeder"
                            class="form-control"
                            value="{{ old('feeder') }}"
                            required>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label>DTC</label>

                        <input
                            type="text"
                            name="dtc"
                            class="form-control"
                            value="{{ old('dtc') }}"
                            required>

                    </div>

                    <div class="col-12 mb-3">

                        <label>Description</label>

                        <textarea
                            name="description"
                            rows="4"
                            class="form-control">{{ old('description') }}</textarea>

                    </div>

                </div>

                <div class="mt-4">

                    <button class="btn btn-success">

                        Save Project

                    </button>

                    <a href="{{ route('projects.index') }}"
                       class="btn btn-secondary">

                        Cancel

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection