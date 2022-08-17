<?php

namespace App\Http\Controllers;

use App\Models\navs;
use Illuminate\Http\Request;

class NavsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.navs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.navs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin.navs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\navs  $navs
     * @return \Illuminate\Http\Response
     */
    public function show(navs $navs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\navs  $navs
     * @return \Illuminate\Http\Response
     */
    public function edit(navs $navs)
    {
        return view('admin.navs.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\navs  $navs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, navs $navs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\navs  $navs
     * @return \Illuminate\Http\Response
     */
    public function destroy(navs $navs)
    {
        return view('admin.navs.delete');
    }
}
