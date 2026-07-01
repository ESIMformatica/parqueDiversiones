<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBooRequest;
use App\Http\Requests\UpdateBooRequest;
use App\Models\Boo;

class BooController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('boo');
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
    public function store(StoreBooRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Boo $boo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Boo $boo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBooRequest $request, Boo $boo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boo $boo)
    {
        //
    }
}
