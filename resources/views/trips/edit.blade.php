@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Edit Trip</h1>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('trips.update', $trip->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $trip->name }}">
                    </div>

                    <div class="form-group">
                        <label for="trip_date">Trip Date:</label>
                        <input type="date" name="trip_date" id="trip_date" class="form-control" value="{{ $trip->trip_date }}">
                    </div>

                    <button type="submit" class="btn btn-success">Update Trip</button>
                </form>
            </div>
        </div>
    </div>
@endsection
