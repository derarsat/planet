<?php

use Illuminate\Support\Facades\App;
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
    return view('index', compact('brands'));
});
Route::get('/search', function () {
    $query = request()->query('query');
    $products = \App\Models\Product::where('title', 'like', "%$query%")->get();
    return view('search', compact('products','query'));
});
Route::get('/who-we-are', function () {
    $integrates = \App\Models\Integrity::all();
    return view('who-we-are', compact('integrates'));
});
Route::get('/brands', function () {
    $brands = \App\Models\Brand::with('products')->get();
    $heroes = \App\Models\BrandsHero::all();

    return view('brands', compact('brands','heroes'));
});

Route::get('/global-presence', function () {
    return view('global-presence');
});

Route::get('/media', function () {
    $events = \App\Models\Event::all();
    $news = \App\Models\News::all();
    return view('media', compact('events','news'));
});

Route::get('/get-in-touch', function () {
    $positions = \App\Models\Position::all();
    return view('get-in-touch', compact('positions'));
});

Route::get('/product/{id}', function () {
    $product = \App\Models\Product::with('productFlavors')->find(request()->id);
    if (!$product) return redirect('/');
    return view('product', compact('product'));
});

Route::get('/form/{type}', function () {
    return view('form', ['type' => request()->type]);
});

Route::post("/form", function () {
    $data = request()->all();
    if (request()->hasFile('cv')) {
        $data['cv'] = str_replace('/public','',@App::make('url')->to('/') . '/storage/' . request()->file('cv')->store('public/cvs'));
    }
    if (request()->hasFile('cover_letter')) {
        $data['cover_letter'] = str_replace('/public','',@App::make('url')->to('/') . '/storage/' . request()->file('cover_letter')->store('public/cover_letters'));

    }

    \App\Models\FormSubmission::create($data);
    return redirect()->back()->with('success', 'Form submitted successfully');
});
