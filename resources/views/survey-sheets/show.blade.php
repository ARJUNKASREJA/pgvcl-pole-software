@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header">

            <h4>Survey Details</h4>

        </div>

        <div class="card-body">

            <table class="table">

                <tr>

                    <th>Survey No</th>

                    <td>{{ $surveySheet->survey_no }}</td>

                </tr>

                <tr>

                    <th>Pole No</th>

                    <td>{{ $surveySheet->pole_no }}</td>

                </tr>

                <tr>

                    <th>Project</th>

                    <td>{{ $surveySheet->project?->project_name }}</td>

                </tr>

            </table>

        </div>

    </div>

</div>

@endsection