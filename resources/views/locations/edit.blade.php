@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card custom-card">
            <div class="card-header custom-header">
                <h1 class="mb-0 text-black">Edit Location</h1>
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

                <form method="post" action="{{ route('locations.update', $location->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="location">Location Name:</label>
                        <select name="location" id="location" class="form-control" required>
                            <option value="Dhaka" {{ $location->name == 'Dhaka' ? 'selected' : '' }}>Dhaka</option>
                            <option value="Cumilla" {{ $location->name == 'Cumilla' ? 'selected' : '' }}>Cumilla</option>
                            <option value="Noakhali" {{ $location->name == 'Noakhali' ? 'selected' : '' }}>Noakhali</option>
                            <option value="Chattagram" {{ $location->name == 'Chattagram' ? 'selected' : '' }}>Chattagram</option>
                            <option value="Cox's Bazaar" {{ $location->name == "Cox's Bazaar" ? 'selected' : '' }}>Cox's Bazaar</option>
                            <option value="Chandpur" {{ $location->name == 'Chandpur' ? 'selected' : '' }}>Chandpur</option>
                            <option value="Feni" {{ $location->name == 'Feni' ? 'selected' : '' }}>Feni</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Update Location</button>
                </form>
            </div>
        </div>
    </div>
@endsection
