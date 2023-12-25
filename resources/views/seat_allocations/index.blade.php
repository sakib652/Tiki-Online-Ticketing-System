@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card custom-card">
            <div class="card-header custom-header">
                <h1 class="mb-0 text-black">Seat Reservation List</h1>
            </div>
            <div class="card-body custom-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="row">
                    @forelse($seatAllocations as $seatAllocation)
                        <div class="col-md-4 mb-3">
                            <form method="get" action="{{ route('seat_allocations.show', $seatAllocation->id) }}" class="location-item-form">
                                @csrf
                                <button type="submit" class="btn btn-info btn-block location-item">
                                <i class="fas fa-chair" style="font-size: 24px;"></i>Seat Reservation -{{ $seatAllocation->id }}
                                    <!-- Seat Reservation -{{ $seatAllocation->id }} -->
                                </button>
                            </form>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <div class="location-item">No seat allocations found.</div>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="card-footer custom-footer">
                <form method="get" action="{{ route('seat_allocations.create') }}" class="mt-3">
                    <button type="submit" class="btn btn-success">Create New Seat Allocation</button>
                </form>
            </div>
        </div>
    </div>
@endsection
