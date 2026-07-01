<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKamikazeRequest;
use App\Http\Requests\UpdateKamikazeRequest;
use App\Models\Kamikaze;

class KamikazeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kamikaze');
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
    public function store(StoreKamikazeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kamikaze $kamikaze)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kamikaze $kamikaze)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKamikazeRequest $request, Kamikaze $kamikaze)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kamikaze $kamikaze)
    {
        //
    }
}
