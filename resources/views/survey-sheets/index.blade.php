@extends('layouts.admin')

@section('title','Survey Sheets')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3 class="mb-0">Survey Sheets</h3>

        <a href="{{ route('survey-sheets.create') }}" class="btn btn-primary">
            Add Survey
        </a>

    </div>

    <div class="card shadow-sm">

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form method="GET" action="{{ route('survey-sheets.index') }}" class="row g-2 mb-3">
                <div class="col-md-4">
                    <input type="text" name="search" class="form-control" placeholder="Search survey, pole, consumer or project" value="{{ request('search') }}">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-dark">Search</button>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('survey-sheets.index') }}" class="btn btn-outline-secondary">Reset</a>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>
                            <th>#</th>
                            <th>Survey</th>
                            <th>Pole</th>
                            <th>Project</th>
                            <th>Consumer</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>

                        @forelse($surveys as $survey)

                        <tr>
                            <td>{{ $loop->iteration + ($surveys->currentPage() - 1) * $surveys->perPage() }}</td>
                            <td>{{ $survey->survey_no }}</td>
                            <td>{{ $survey->pole_no }}</td>
                            <td>{{ $survey->project?->project_code ?? 'N/A' }}</td>
                            <td>{{ $survey->consumer_name ?? 'N/A' }}</td>
                            <td>
                                <a href="{{ route('survey-sheets.edit',$survey) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('survey-sheets.destroy',$survey) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete Survey?')">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @empty

                        <tr>
                            <td colspan="6" class="text-center">
                                No Survey Found
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>
            </div>

            <div class="mt-3">
                {{ $surveys->links() }}
            </div>

        </div>

    </div>

</div>

@endsection