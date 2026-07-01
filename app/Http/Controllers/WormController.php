<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWormRequest;
use App\Http\Requests\UpdateWormRequest;
use App\Models\Worm;

class WormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('worm');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWormRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Worm $worm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Worm $worm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWormRequest $request, Worm $worm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Worm $worm)
    {
        //
    }
}
