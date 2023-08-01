<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('logistics-services', function () {
    return view('logistics_services');
})->name('logistics-services');

Route::get('aviation-products', function () {
    return view('aviation_services');
})->name('aviation-services');

Route::get('blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('career', function () {
    return view('career');
})->name('career');