<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThepublicController;
use App\Http\Controllers\BanersController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\NavsController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\MediasController;
use App\Http\Controllers\FirstmgnsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CalculatorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//
//Route::get('/adm', function () {
//    return view('admin.admin');
//});
Route::get('/', [ThepublicController::class,"index"]);
Route::get('/search', [SearchController::class,"index"]);
Route::post('/search', [SearchController::class,"store"]);


Route::group(['prefix'=>'adm'], function () {
    Route::get('/', [ReportController::class,"index"]);

    Route::resource('report',    ReportController::class);
    Route::resource('navs',      NavsController::class);
    Route::resource('banners',    BanersController::class);
    Route::resource('sliders',   SlidersController::class);
    Route::resource('prods',     ProductsController::class);
    Route::resource('pages',     PagesController::class);
    Route::resource('posts',     PostsController::class);
    Route::resource('media',     MediasController::class);
    Route::resource('firstmgns', FirstmgnsController::class);
    Route::resource('calculator',CalculatorController::class);
    Route::get(     'fcalc',       [CalculatorController::class, "fcalc"]);



});





