@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card custom-card">
            <div class="card-header custom-header">
                <h1 class="mb-0 text-black">Location Details</h1>
            </div>
            <div class="card-body custom-body">
                <p><strong>Name:</strong> {{ $location->name }}</p>
            </div>
            <div class="card-footer custom-footer">
                <a href="{{ route('locations.edit', $location->id) }}" class="btn btn-warning">Edit Location</a>

                <form method="post" action="{{ route('locations.destroy', $location->id) }}" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this location?')">Delete Location</button>
                </form>
            </div>
        </div>
    </div>
@endsection
