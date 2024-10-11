<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Illuminate\Http\Requests;

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizers = Organizer::all();
        return view('organizers.index', compact('organizers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organizers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Organizer::create($request->all());
        return redirect()->route('organizers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organizer $organizer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organizer $organizer)
    {
        return view('organizers.edit', compact('organizer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organizer $organizer)
    {
        $organizer->update($request->all());
        return redirect()->route('organizers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organizer $organizer)
    {
        $organizer->delete();
        return redirect()->route('organizers.index');
    }
}
