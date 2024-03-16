<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $brands = \App\Models\Brand::all();
    return view('index',compact('brands'));
});
Route::get('/who-we-are', function () {
    $integrates = \App\Models\Integrity::all();
    return view('who-we-are', compact('integrates'));
});
Route::get('/brands', function () {
    $brands = \App\Models\Brand::with('products')->get();
    return view('brands', compact('brands'));
});

Route::get('/global-presence', function () {
    return view('global-presence');
});

Route::get('/media', function () {
    $events = \App\Models\Event::all();
    return view('media', compact('events'));
});

Route::get('/get-in-touch', function () {
    $positions = \App\Models\Position::all();
    return view('get-in-touch', compact('positions'));
});

Route::get('/product/{id}', function () {
    $product = \App\Models\Product::with('productFlavors')->find(request()->id);
    if(!$product)  return redirect('/');
    return view('product', compact('product'));
});
