<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePirateRequest;
use App\Http\Requests\UpdatePirateRequest;
use App\Models\Pirate;

class PirateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pirate');
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
    public function store(StorePirateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pirate $pirate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pirate $pirate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePirateRequest $request, Pirate $pirate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pirate $pirate)
    {
        //
    }
}
