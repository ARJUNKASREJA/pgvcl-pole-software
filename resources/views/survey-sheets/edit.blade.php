@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header">

            <h4>Edit Survey</h4>

        </div>

        <div class="card-body">

            <form
                action="{{ route('survey-sheets.update',$surveySheet) }}"
                method="POST">

                @csrf

                @method('PUT')

                @include('survey-sheets.form')

                <button
                    class="btn btn-success">

                    Update Survey

                </button>

            </form>

        </div>

    </div>

</div>

@endsection