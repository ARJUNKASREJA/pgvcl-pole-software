@extends('layouts.admin')

@section('title','Consumers')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Consumers</h3>
        <a href="{{ route('consumers.create') }}" class="btn btn-primary">Add Consumer</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form method="GET" action="{{ route('consumers.index') }}" class="row g-2 mb-3">
                <div class="col-md-3">
                    <input type="text" name="search" class="form-control" placeholder="Search consumer, account, meter or village" value="{{ $filters['search'] ?? '' }}">
                </div>
                <div class="col-md-2">
                    <select name="project_id" class="form-select">
                        <option value="">All Projects</option>
                        @foreach($projects as $project)
                            <option value="{{ $project->id }}" @selected(($filters['project_id'] ?? '') == $project->id)>{{ $project->project_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="pole_id" class="form-select">
                        <option value="">All Poles</option>
                        @foreach($poles as $pole)
                            <option value="{{ $pole->id }}" @selected(($filters['pole_id'] ?? '') == $pole->id)>{{ $pole->pole_no }}</option>
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
                        <option value="consumer_no" @selected(($filters['sort_by'] ?? '') === 'consumer_no')>Consumer No</option>
                        <option value="consumer_name" @selected(($filters['sort_by'] ?? '') === 'consumer_name')>Name</option>
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
                            <th>Consumer No</th>
                            <th>Name</th>
                            <th>Pole</th>
                            <th>Project</th>
                            <th>Village</th>
                            <th>Status</th>
                            <th width="220">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($consumers as $consumer)
                            <tr>
                                <td>{{ $loop->iteration + ($consumers->currentPage() - 1) * $consumers->perPage() }}</td>
                                <td>{{ $consumer->consumer_no }}</td>
                                <td>{{ $consumer->consumer_name }}</td>
                                <td>{{ $consumer->pole?->pole_no }}</td>
                                <td>{{ $consumer->project?->project_name }}</td>
                                <td>{{ $consumer->meter_no ?? 'N/A' }}</td>
                                <td>
                                    @if($consumer->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('consumers.show',$consumer) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('consumers.edit',$consumer) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('consumers.destroy',$consumer) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete Consumer?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No Record Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $consumers->links() }}
            </div>
        </div>
    </div>
</div>

@endsection