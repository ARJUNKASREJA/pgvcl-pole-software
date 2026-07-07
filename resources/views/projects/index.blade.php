@extends('layouts.admin')

@section('content')

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Project Management</h2>

        <a href="{{ route('projects.create') }}" class="btn btn-primary">
            + New Project
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>
                <th>ID</th>
                <th>Project Name</th>
                <th>Project Code</th>
                <th>Division</th>
                <th>Subdivision</th>
                <th>Village</th>
                <th>Feeder</th>
                <th>Status</th>
                <th width="180">Action</th>
            </tr>

        </thead>

        <tbody>

        @forelse($projects as $project)

            <tr>

                <td>{{ $project->id }}</td>

                <td>{{ $project->project_name }}</td>

                <td>{{ $project->project_code }}</td>

                <td>{{ $project->division }}</td>

                <td>{{ $project->subdivision }}</td>

                <td>{{ $project->village }}</td>

                <td>{{ $project->feeder }}</td>

                <td>
                    @if($project->status)
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Inactive</span>
                    @endif
                </td>

                <td>

                    <a href="{{ route('projects.edit',$project->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('projects.destroy',$project->id) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete this Project?')">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="9" class="text-center">
                    No Project Found
                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection