@extends('layouts.admin')

@section('title','Pole Management')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Pole Management</h3>
        <a href="{{ route('poles.create') }}" class="btn btn-primary">Add Pole</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form method="GET" action="{{ route('poles.index') }}" class="row g-2 mb-3">
                <div class="col-md-3">
                    <input type="text" name="search" class="form-control" placeholder="Search pole, type, village or feeder" value="{{ $filters['search'] ?? '' }}">
                </div>
                <div class="col-md-3">
                    <select name="project_id" class="form-select">
                        <option value="">All Projects</option>
                        @foreach($projects as $project)
                            <option value="{{ $project->id }}" @selected(($filters['project_id'] ?? '') == $project->id)>{{ $project->project_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="status" class="form-select">
                        <option value="">All Status</option>
                        <option value="1" @selected(($filters['status'] ?? '') === '1')>Active</option>
                        <option value="0" @selected(($filters['status'] ?? '') === '0')>Inactive</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="sort_by" class="form-select">
                        <option value="created_at" @selected(($filters['sort_by'] ?? 'created_at') === 'created_at')>Created At</option>
                        <option value="pole_no" @selected(($filters['sort_by'] ?? '') === 'pole_no')>Pole No</option>
                        <option value="pole_type" @selected(($filters['sort_by'] ?? '') === 'pole_type')>Pole Type</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <select name="sort_direction" class="form-select">
                        <option value="asc" @selected(($filters['sort_direction'] ?? 'desc') === 'asc')>Asc</option>
                        <option value="desc" @selected(($filters['sort_direction'] ?? 'desc') === 'desc')>Desc</option>
                    </select>
                </div>
                <div class="col-md-1 d-grid">
                    <button class="btn btn-dark">Filter</button>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Pole</th>
                            <th>Type</th>
                            <th>Height</th>
                            <th>Project</th>
                            <th>Village</th>
                            <th>Status</th>
                            <th width="220">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($poles as $pole)
                            <tr>
                                <td>{{ $loop->iteration + ($poles->currentPage() - 1) * $poles->perPage() }}</td>
                                <td>{{ $pole->pole_no }}</td>
                                <td>{{ $pole->pole_type }}</td>
                                <td>{{ $pole->pole_height }}</td>
                                <td>{{ $pole->project?->project_name }}</td>
                                <td>{{ $pole->village ?? 'N/A' }}</td>
                                <td>
                                    @if($pole->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('poles.show',$pole) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('poles.edit',$pole) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('poles.destroy',$pole) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete Pole?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No Pole Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $poles->links() }}
            </div>
        </div>
    </div>
</div>

@endsection