<?php

namespace App\Http\Controllers;

use App\Models\Tourists;
use App\Http\Requests\StoreTouristsRequest;
use App\Http\Requests\UpdateTouristsRequest;

class TouristsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreTouristsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tourists $tourists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tourists $tourists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTouristsRequest $request, Tourists $tourists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tourists $tourists)
    {
        //
    }
}
