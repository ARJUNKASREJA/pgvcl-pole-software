@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between mb-3">

        <h3>Survey Sheets</h3>

        <a
            href="{{ route('survey-sheets.create') }}"
            class="btn btn-primary">

            Add Survey

        </a>

    </div>

    <div class="card shadow">

        <div class="card-body">

            <table class="table table-bordered">

                <thead>

                    <tr>

                        <th>#</th>

                        <th>Survey</th>

                        <th>Pole</th>

                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($surveys as $survey)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $survey->survey_no }}</td>

                        <td>{{ $survey->pole_no }}</td>

                        <td>

                            <a
                                href="{{ route('survey-sheets.edit',$survey) }}"
                                class="btn btn-warning btn-sm">

                                Edit

                            </a>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td
                            colspan="4"
                            class="text-center">

                            No Survey Found

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection