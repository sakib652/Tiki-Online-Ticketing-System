@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card custom-card">
            <div class="card-header custom-header">
                <h1 class="mb-0 text-black">Seat Allocation Details</h1>
            </div>
            <div class="card-body custom-body">
                <p><strong>Trip:</strong> {{ $seatAllocation->trip->name }}</p>
                <p><strong>User:</strong> {{ $seatAllocation->user->name }}</p>
                <p><strong>Seat Number:</strong> {{ $seatAllocation->seat_number }}</p>

                <a href="{{ route('seat_allocations.edit', $seatAllocation->id) }}" class="btn btn-warning">Edit Seat Allocation</a>

                <form method="post" action="{{ route('seat_allocations.destroy', $seatAllocation->id) }}" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this seat allocation?')">Delete Seat Allocation</button>
                </form>
            </div>
        </div>
    </div>
@endsection
