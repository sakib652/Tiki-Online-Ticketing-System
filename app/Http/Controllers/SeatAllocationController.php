<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SeatAllocation;

class SeatAllocationController extends Controller
{
    public function index()
    {
        $seatAllocations = SeatAllocation::all();
        return view('seat_allocations.index', compact('seatAllocations'));
    }

    public function create()
    {
        $trips = Trip::all();
        $users = User::all();
        return view('seat_allocations.create', compact('trips', 'users'));
    }

    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'trip_id' => 'required|exists:trips,id',
            'user_id' => 'required|exists:users,id',
            'seat_number' => 'required|integer',
        ]);

      
        $seatAllocation = SeatAllocation::create($validatedData);

        return redirect()->route('seat_allocations.index', $seatAllocation->id)
            ->with('success', 'Seat Allocation created successfully!');
    }

    public function show(SeatAllocation $seatAllocation)
    {
        return view('seat_allocations.show', compact('seatAllocation'));
    }

    public function edit(SeatAllocation $seatAllocation)
    {
        $trips = Trip::all();
        $users = User::all();

        return view('seat_allocations.edit', compact('seatAllocation', 'trips', 'users'));
    }

    public function update(Request $request, SeatAllocation $seatAllocation)
    {
        
        $validatedData = $request->validate([
            'trip_id' => 'required|exists:trips,id',
            'user_id' => 'required|exists:users,id',
            'seat_number' => 'required|integer',
        ]);

        
        $seatAllocation->update($validatedData);

        return redirect()->route('seat_allocations.index', $seatAllocation->id)
            ->with('success', 'Seat Allocation updated successfully!');
    }

    public function destroy(SeatAllocation $seatAllocation)
    {
        
        $seatAllocation->delete();

        return redirect()->route('seat_allocations.index')
            ->with('success', 'Seat Allocation deleted successfully!');
    }
}
