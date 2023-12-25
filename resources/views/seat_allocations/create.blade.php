@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card custom-card">
            <div class="card-header custom-header">
                <h1 class="mb-0 text-black">Reserve a New Seat</h1>
            </div>
            <div class="card-body custom-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ route('seat_allocations.store') }}" class="needs-validation" novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="trip_id">Trip:</label>
                        <select name="trip_id" id="trip_id" class="form-control" required>
                            @foreach($trips as $trip)
                                <option value="{{ $trip->id }}">{{ $trip->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Please select a trip.</div>
                    </div>

                    <div class="form-group">
                        <label for="user_id">User:</label>
                        <select name="user_id" id="user_id" class="form-control" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Please select a user.</div>
                    </div>

                    <div class="form-group">
                        <label for="seat_number">Seat Number:</label>
                        <input type="number" name="seat_number" id="seat_number" class="form-control" required>
                        <div class="invalid-feedback">Please enter a seat number.</div>
                    </div>

                    <button type="submit" class="btn btn-success">Create Seat Allocation</button>
                </form>
            </div>
        </div>
    </div>
@endsection
