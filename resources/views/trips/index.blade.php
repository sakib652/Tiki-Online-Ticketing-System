@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Trip List</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse($trips as $trip)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $trip->name }}</h5>
                            <p class="card-text">Date: {{ $trip->trip_date }}</p>
                            <form method="get" action="{{ route('trips.show', $trip->id) }}">
                                <button type="submit" class="btn btn-primary">View Details</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p>No trips available.</p>
            @endforelse
        </div>

        <form method="get" action="{{ route('trips.create') }}" class="mt-3">
            <button type="submit" class="btn btn-success">Create New Trip</button>
        </form>
    </div>
@endsection
