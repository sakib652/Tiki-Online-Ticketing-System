@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a New Trip</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Trip Information</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('trips.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Trip Name:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="trip_date" class="form-label">Trip Date:</label>
                        <input type="date" name="trip_date" id="trip_date" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success">Create Trip</button>
                </form>
            </div>
        </div>
    </div>
@endsection
