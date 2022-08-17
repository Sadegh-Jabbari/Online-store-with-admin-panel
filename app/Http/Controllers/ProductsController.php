<?php

namespace App\Http\Controllers;

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
        return view('admin.product.index');
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

        $file = $request->file('ImgP');
        $extension = $file->getClientOriginalExtension();
        $fileName = $this->randomNum().'.'.$extension;
        $file->move('uploads/medias/product/', $fileName);
        $finaldes = 'uploads/medias/product/'. $fileName;
        $a = $request;
        $a['ImgP'] = $finaldes;
//        dd($a);

        products::create([
            'photo_name' => $a['photo_name'],
            'photo_path' => $a['photo_path'],
            'photo_alt' => $a['photo_alt'],
            'photo_descript' => $a['photo_descript'],
        ]);
    }

    public function randomNum(){
        $first = rand(1, 100);
        $sec = rand(1, 1000);
        $final = rand($first, $sec);
        $alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        $alphaRand = rand(0, 25);
        $alpha = $alphabet[$alphaRand];
        $alphaRand = rand(0, 25);
        $alpha = $alphabet[$alphaRand];
        $alphaRand = rand(0, 25);
        $alpha = $alphabet[$alphaRand];
        return $final . '-' . $alpha . '-' . time();
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
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}
