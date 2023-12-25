@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card custom-card">
            <div class="card-header custom-header">
                <h1 class="mb-0 text-black">Location List</h1>
            </div>
            <div class="card-body custom-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="row">
                    @forelse($locations as $location)
                        <div class="col-md-4 mb-3">
                            <form method="get" action="{{ route('locations.show', $location->id) }}" class="location-item-form">
                                @csrf
                                <button type="submit" class="btn btn-info btn-block location-item">
                                    {{ $location->name }}
                                </button>
                            </form>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <div class="location-item">No locations found.</div>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="card-footer custom-footer">
                <form method="get" action="{{ route('locations.create') }}" class="mt-3">
                    <button type="submit" class="btn btn-success">Create New Location</button>
                </form>
            </div>
        </div>
    </div>
@endsection
