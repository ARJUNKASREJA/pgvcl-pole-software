@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header bg-warning">

            <h4>Edit Pole</h4>

        </div>

        <div class="card-body">

            <form action="{{ route('poles.update',$pole) }}" method="POST">

                @csrf

                @method('PUT')

                @include('poles.form')

                <button class="btn btn-success">

                    Update Pole

                </button>

                <a href="{{ route('poles.index') }}"
                    class="btn btn-secondary">

                    Back

                </a>

            </form>

        </div>

    </div>

</div>

@endsection
