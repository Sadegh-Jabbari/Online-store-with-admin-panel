<?php

namespace App\Http\Controllers;

use App\Models\medias;
use Illuminate\Http\Request;

class MediasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.media.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.media.create');
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
     * @param  \App\Models\medias  $medias
     * @return \Illuminate\Http\Response
     */
    public function show(medias $medias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medias  $medias
     * @return \Illuminate\Http\Response
     */
    public function edit(medias $medias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medias  $medias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medias $medias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medias  $medias
     * @return \Illuminate\Http\Response
     */
    public function destroy(medias $medias)
    {
        //
    }
}
