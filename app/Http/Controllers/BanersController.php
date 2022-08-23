<?php

namespace App\Http\Controllers;

use App\Models\baners;
use App\Models\medias;
use Illuminate\Http\Request;

class BanersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.banners.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.create');
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
        if (isset($request->indeximg)) {
            $file = $request->file('media_id');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $randomNum . '.' . $extension;
            $file->move('uploads/medias/', $filename);
            $finaldes = 'uploads/medias/' . $filename;
            $a['photo_path'] = $finaldes;
            $media->photo_path = $a['photo_path'];
            $media->save();
            $mediaId = $media->id;
            $a['media_id'] = $mediaId;
        }
        baners::create($a->all());
        return redirect(route("banners.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\baners  $baners
     * @return \Illuminate\Http\Response
     */
    public function show(baners $baners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\baners  $baners
     * @return \Illuminate\Http\Response
     */
    public function edit(baners $baners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\baners  $baners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, baners $baners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\baners  $baners
     * @return \Illuminate\Http\Response
     */
    public function destroy(baners $baners)
    {
        //
    }
}
