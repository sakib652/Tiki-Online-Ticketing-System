@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card custom-card">
            <div class="card-header custom-header">
                <h1 class="mb-0 text-black">User Details</h1>
            </div>
            <div class="card-body custom-body">
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>

                <div class="btn-group">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit User</a>

                    <span style="margin-right: 10px;"></span>

                    <form method="post" action="{{ route('users.destroy', $user->id) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
