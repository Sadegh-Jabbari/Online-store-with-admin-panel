<?php

namespace App\Http\Controllers;

use App\Models\admin\sliders;
use App\Models\medias;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = sliders::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $media = medias::limit(10)->get();
        return view('admin.sliders.create', compact('media'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extraController = new ExtraController();
        $randomNum = $extraController->randomNum();
        $a = $request;
        $media = new medias();
        if (isset($request->index)) {
            $file = $request->file('index');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $randomNum . '.' . $extension;
            $file->move('uploads/medias/sliders/', $filename);
            $finaldes = 'uploads/medias/sliders/' . $filename;
            $a['photo_path'] = $finaldes;
            $media->photo_path = $a['photo_path'];
            $media->save();
            $mediaId = $media->id;
            $a['media_id'] = $mediaId;
        }
        sliders::create($a->all());
        return redirect(route("sliders.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function show(sliders $sliders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function edit(sliders $sliders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sliders $sliders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function destroy(sliders $sliders)
    {
        //
    }
}
