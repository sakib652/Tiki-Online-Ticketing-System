@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card custom-card">
            <div class="card-header custom-header">
                <h1 class="mb-0 text-black">Create a New Location</h1>
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

                <form method="post" action="{{ route('locations.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="location">Location Name:</label>
                        <select name="location" id="location" class="form-control" required>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Cumilla">Cumilla</option>
                            <option value="Noakhali">Noakhali</option>
                            <option value="Chattagram">Chattagram</option>
                            <option value="Cox's Bazaar">Cox's Bazaar</option>
                            <option value="Chandpur">Chandpur</option>
                            <option value="Feni">Feni</option>
                        </select>
                    </div>        

                    <button type="submit" class="btn btn-success">Create Location</button>
                </form>
            </div>
        </div>
    </div>
@endsection
