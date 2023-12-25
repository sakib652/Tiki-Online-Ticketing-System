@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card custom-card">
            <div class="card-header custom-header">
                <h1 class="mb-0 text-black">Trip Details</h1>
            </div>
            <div class="card-body custom-body">
                <p><strong>Name:</strong> {{ $trip->name }}</p>
                <p><strong>Trip Date:</strong> {{ $trip->trip_date }}</p>
            </div>
            <div class="card-footer custom-footer">
                <form method="get" action="{{ route('trips.edit', $trip->id) }}" class="d-inline">
                    <button type="submit" class="btn btn-primary">Edit Trip</button>
                </form>
                <form method="post" action="{{ route('trips.destroy', $trip->id) }}" class="d-inline" id="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger">Delete Trip</button>
                </form>
            </div>

            <div class="card-footer custom-footer">
                <form method="get" action="{{ route('trips.index') }}" class="d-inline">
                    <button type="submit" class="btn btn-success">Back to Trips</button>
                </form>
            </div>

        </div>
    </div>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            
            $('#delete-form button').click(function() {
               
                var confirmed = confirm('Are you sure you want to delete this trip?');
                if (confirmed) {
                    
                    $('#delete-form').submit();
                }
            });
        });
    </script>
@endsection
