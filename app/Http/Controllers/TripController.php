<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return view('trips.index', compact('trips'));
    }

    public function create()
    {
        return view('trips.create');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string',
            'trip_date' => 'required|date',
        ]);

        
        $trip = Trip::create($validatedData);

        return redirect()->route('trips.show', $trip->id)
            ->with('success', 'Trip created successfully!');
    }

    public function show(Trip $trip)
    {
        return view('trips.show', compact('trip'));
    }

    public function edit(Trip $trip)
    {
        return view('trips.edit', compact('trip'));
    }   

    public function update(Request $request, Trip $trip)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string',
            'trip_date' => 'required|date',
        ]);

        
        $trip->update($validatedData);

        return redirect()->route('trips.show', $trip->id)
            ->with('success', 'Trip updated successfully!');
    }

    public function destroy(Trip $trip)
    {
        
        $trip->delete();

        return redirect()->route('trips.index')
            ->with('success', 'Trip deleted successfully!');
    }
}
