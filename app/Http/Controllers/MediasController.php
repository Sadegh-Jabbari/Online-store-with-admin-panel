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
        $medias = medias::all();
        return view('admin.media.index', compact('medias'));
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
        $extraController = new ExtraController();
        $randomNum = $extraController->randomNum();
        $a = $request;
        $media = new medias();
        if (isset($request->media_id)) {
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
        medias::create($a->all());
        return redirect(route("media.index"));

//        $file = $request->file('indeximg');
//        $extension = $file->getClientOriginalExtension(); // getting image extension
//        $filename =$this->randomNum() .'.'.$extension;
//        $file->move('uploads/medias/', $filename);
//        $finaldes = 'uploads/medias/'.$filename;
//        $a = $request;
//        $a['photo_path']=$finaldes;
//        // unset($a['ImgP']);
//
//
//        medias::create($a->all());
//        return redirect(route("media.index"));
    }
//    public function randomNum(){
//        $first = rand(1,100);
//        $sec = rand(100,1000);
//        $final = rand($first,$sec);
//        $alafabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
//        $alfabetsize = intval(count($alafabet)-1);
//        $alfrand = rand(0,$alfabetsize);
//
//        $alf = $alafabet[$alfrand];
//        $alfrand = rand(0,$alfabetsize);
//        $alf = strval($alf).$alafabet[$alfrand];
//        $alfrand = rand(0,$alfabetsize);
//        $alf = strval($alf).strval($alafabet[$alfrand]);
//        return strval($final) . "-".$alf."-". strval(time());
//    }
//    public function dropMedia(Request $request){
//        $file = $request->file('file');
//        $extension = $file->getClientOriginalExtension(); // getting image extension
//        $filename =$this->randomNum() .'.'.$extension;
//        $file->move('uploads/medias/', $filename);
//        $finaldes = 'uploads/medias/'.$filename;
//        $a = $request;
//        $a['photo_path']=$finaldes;
//        $media = new medias;
//        $media->photo_path = $a['photo_path'];
//        $media->save();
//        return "done";
//    }

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
