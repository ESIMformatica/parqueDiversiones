<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFallRequest;
use App\Http\Requests\UpdateFallRequest;
use App\Models\Fall;

class FallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('fall');
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
    public function store(StoreFallRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fall $fall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fall $fall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFallRequest $request, Fall $fall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fall $fall)
    {
        //
    }
}
