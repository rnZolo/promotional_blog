<?php

namespace App\Http\Controllers;

use App\Destinations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historicals = Destinations::select('title', 'caption', 'location', 'open_schedule', 'image_path')
                            ->where('tag', 'historical landmark')->limit(7)->get();
        $islands = Destinations::select('title', 'caption', 'location', 'open_schedule', 'image_path')
                            ->where('tag', 'island beaches')->limit(7)->get();
        $nature = Destinations::select('title', 'caption', 'location', 'open_schedule', 'image_path')
                            ->where('tag', 'nature camp')->limit(7)->get();
        $dine_ins = Destinations::select('title', 'caption', 'location', 'open_schedule', 'image_path')
                            ->where('tag', 'local dinein')->limit(7)->get();
        // dd($historicals[0]);
        return view('page.wheretogo', compact('historicals', 'islands', 'nature', 'dine_ins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Destinations  $destinations
     * @return \Illuminate\Http\Response
     */
    public function show(Destinations $destinations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Destinations  $destinations
     * @return \Illuminate\Http\Response
     */
    public function edit(Destinations $destinations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Destinations  $destinations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destinations $destinations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Destinations  $destinations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destinations $destinations)
    {
        //
    }
}
