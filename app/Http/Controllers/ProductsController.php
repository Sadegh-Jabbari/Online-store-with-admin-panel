<?php

namespace App\Http\Controllers;

use App\Models\medias;
use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prods = products::all();
        return view('admin.product.index', compact("prods"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
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
            $file->move('uploads/medias/products/', $filename);
            $finaldes = 'uploads/medias/products/' . $filename;
            $a['photo_path'] = $finaldes;
            $media->photo_path = $a['photo_path'];
            $media->save();
            $mediaId = $media->id;
            $a['media_id'] = $mediaId;
        }
        products::create($a->all());
        return redirect(route("prods.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products, $id)
    {
        $prod = $products::find($id);
        $media = medias::all();
        return view('admin.product.edite', compact('prod', 'media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products, $id)
    {
        $prod = $products::find($id);
        $prodID = $prod->media_id;
        $extraController = new ExtraController();
        $randomNum = $extraController->randomNum();
        $a = $request;
        $media = new medias();
        $find_photo = $media::find($prodID);
        $photo_path = $find_photo->photo_path;
        if (isset($request->index)) {
            if (file_exists($photo_path)) {
                unlink($photo_path);
            }
            $file = $request->file('index');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $randomNum . '.' . $extension;
            $file->move('uploads/medias/products/', $filename);
            $finaldes = 'uploads/medias/products/' . $filename;
            $a['photo_path'] = $finaldes;
            $media->photo_path = $a['photo_path'];
            $media->save();
            $mediaId = $media->id;
            $a['media_id'] = $mediaId;
        }
        $prod->update($a->all());
        return redirect(route("prods.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products, $id)
    {
        $prod = $products::find($id);
        $prodID = $prod->media_id;
        $media = new medias();
        $find_photo = $media::find($prodID);
        $photo_path = $find_photo->photo_path;
        if (file_exists($photo_path)) {
            unlink($photo_path);
        }
        $prod->destroy($id);
        return redirect(route("prods.index"));
    }
}
