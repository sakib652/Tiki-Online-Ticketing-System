@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card custom-card">
            <div class="card-header custom-header">
                <h1 class="mb-0 text-black">User List</h1>
            </div>
            <div class="card-body custom-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="row">
                    @forelse($users as $user)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $user->name }}</h5>
                                    <p class="card-text">Email: {{ $user->email }}</p>
                                    <p class="card-text">Role: {{ $user->role }}</p>
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">View Profile</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <div class="alert alert-info">No users found.</div>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="card-footer custom-footer">
                <a href="{{ route('users.create') }}" class="btn btn-success">Create New User</a>
            </div>
        </div>
    </div>
@endsection
