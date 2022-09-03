<?php

namespace App\Http\Controllers;

use App\Models\categoriesMenu;
use App\Models\navs;
use App\Models\subMenu;
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
        $navs = navs::all();
        $catMenu = categoriesMenu::all();
        $subMenu = subMenu::all();
        return view('admin.navs.index', compact("navs", "catMenu", "subMenu"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $navs = navs::all();
        $catMenu = categoriesMenu::all();
        return view('admin.navs.create', compact("navs", "catMenu"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $navs = new navs();
        $catMenu = new categoriesMenu();
        $subMenu = new  subMenu();
        navs::create($request->all());
        categoriesMenu::create($request->all());
        subMenu::create($request->all());
        return redirect(route("navs.index"));
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
    public function edit(navs $navs, $id)
    {
        $navs = navs::all();
        $catMenu = categoriesMenu::all();
        $subMenu = subMenu::all();
        $nav = navs::find($id);
        $cat = categoriesMenu::find($id);
        $sub = subMenu::find($id);
        return view('admin.navs.edit', compact('navs', 'catMenu', 'subMenu', 'nav', 'cat', 'sub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\navs  $navs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, navs $navs, $id)
    {
        $nav = $navs::find($id);
        $cat = categoriesMenu::find($id);
        $sub = subMenu::find($id);
        $nav->update($request->all());
        $cat->update($request->all());
        $sub->update($request->all());
        return redirect(route("navs.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\navs  $navs
     * @return \Illuminate\Http\Response
     */
    public function destroy(navs $navs, $id)
    {
        $nav = navs::find($id);
        $cat = categoriesMenu::find($id);
        $sub = subMenu::find($id);
        $nav->destroy($id);
        $cat->destroy($id);
        $sub->destroy($id);
        return redirect(route('navs.index'));
    }
}
