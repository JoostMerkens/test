<?php

namespace App\Http\Controllers;

use App\Models\Horse;
use Illuminate\Http\Request;

class HorseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horses = Horse::all();
        return view('horses.index', compact('horses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horses = Horse::all();
        return view('horses.index', compact('horses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horse  $horses
     * @return \Illuminate\Http\Response
     */
    public function show(Horse $horses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horse  $horses
     * @return \Illuminate\Http\Response
     */
    public function edit(Horse $horses)
    {
        $horses = Horse::all();
        return view('horses.index', compact('horses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horse  $horses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horse $horses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horse  $horses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horse $horses)
    {
        //
    }
}
