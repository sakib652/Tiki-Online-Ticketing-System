@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card custom-card">
            <div class="card-header custom-header">
                <h1 class="mb-0 text-black">Edit Seat Allocation</h1>
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

                <form method="post" action="{{ route('seat_allocations.update', $seatAllocation->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="trip_id">Trip:</label>
                        <select name="trip_id" id="trip_id" required>
                            @foreach($trips as $trip)
                                <option value="{{ $trip->id }}" {{ $seatAllocation->trip_id == $trip->id ? 'selected' : '' }}>
                                    {{ $trip->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="user_id">User:</label>
                        <select name="user_id" id="user_id" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $seatAllocation->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="seat_number">Seat Number:</label>
                        <input type="number" name="seat_number" id="seat_number" value="{{ $seatAllocation->seat_number }}" required>
                    </div>

                    <button type="submit" class="btn btn-success">Update Seat Allocation</button>
                </form>
            </div>
        </div>
    </div>
@endsection
