<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRollerRequest;
use App\Http\Requests\UpdateRollerRequest;
use App\Models\Roller;

class RollerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('roller');
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
    public function store(StoreRollerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Roller $roller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Roller $roller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRollerRequest $request, Roller $roller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Roller $roller)
    {
        //
    }
}
