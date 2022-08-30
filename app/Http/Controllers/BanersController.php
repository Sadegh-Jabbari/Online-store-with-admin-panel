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
        $banners = baners::all();
        return view('admin.banners.index', compact("banners"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $media = medias::limit(10)->get();
        return view('admin.banners.create', compact("media"));
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
            $file->move('uploads/medias/banners/', $filename);
            $finaldes = 'uploads/medias/banners/' . $filename;
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
    public function edit(baners $baners, $bannerID)
    {
        $banner = $baners::find($bannerID);
        $media = medias::all();
        return view('admin.banners.edit', compact('banner','media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\baners  $baners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, baners $baners, $id)
    {
        $banner = $baners::find($id);
        $bannerID = $banner->media_id;
        $extraController = new ExtraController();
        $randomNum = $extraController->randomNum();
        $a = $request;
        $media = new medias();
        $find_photo = $media::find($bannerID);
        $photo_path = $find_photo->photo_path;
//        dd($photo_path);
        if (isset($request->index)) {
            if (file_exists($photo_path)) {
                unlink($photo_path);
            }
            $file = $request->file('index');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $randomNum . '.' . $extension;
            $file->move('uploads/medias/banners/', $filename);
            $finaldes = 'uploads/medias/banners/' . $filename;
            $a['photo_path'] = $finaldes;
            $media->photo_path = $a['photo_path'];
            $media->save();
            $mediaId = $media->id;
            $a['media_id'] = $mediaId;
        }
        $banner->update($a->all());
        return redirect(route("banners.index"));
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
