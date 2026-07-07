@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header">

            <h4>Create Survey</h4>

        </div>

        <div class="card-body">

            <form
                action="{{ route('survey-sheets.store') }}"
                method="POST">

                @csrf

                @include('survey-sheets.form')

                <button
                    class="btn btn-primary">

                    Save Survey

                </button>

            </form>

        </div>

    </div>

</div>

@endsection