@extends('layouts.admin')

@section('title','Projects')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h4 class="mb-0">

                Project Management

            </h4>

            <a href="{{ route('projects.create') }}"
               class="btn btn-primary">

                + New Project

            </a>

        </div>

        <div class="card-body">

            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif

            <form method="GET"
                  action="{{ route('projects.index') }}"
                  class="row mb-3">

                <div class="col-md-4">

                    <input
                        type="text"
                        name="search"
                        class="form-control"
                        placeholder="Search Project..."
                        value="{{ request('search') }}">

                </div>

                <div class="col-md-2">

                    <button class="btn btn-dark">

                        Search

                    </button>

                </div>

            </form>

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                <tr>

                    <th>ID</th>
                    <th>Project Code</th>
                    <th>Project Name</th>
                    <th>Village</th>
                    <th>Feeder</th>
                    <th>DTC</th>
                    <th>Status</th>
                    <th width="220">Action</th>

                </tr>

                </thead>

                <tbody>

                @forelse($projects as $project)

                    <tr>

                        <td>{{ $project->id }}</td>

                        <td>{{ $project->project_code }}</td>

                        <td>{{ $project->project_name }}</td>

                        <td>{{ $project->village }}</td>

                        <td>{{ $project->feeder }}</td>

                        <td>{{ $project->dtc }}</td>

                        <td>

                            <span class="badge bg-{{ $project->status_badge }}">

                                {{ $project->status_text }}

                            </span>

                        </td>

                        <td>

                            <a href="{{ route('projects.edit',$project) }}"
                               class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form
                                action="{{ route('projects.destroy',$project) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete Project ?')">

                                    Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="8"
                            class="text-center">

                            No Projects Found

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

            {{ $projects->links() }}

        </div>

    </div>

</div>

@endsection