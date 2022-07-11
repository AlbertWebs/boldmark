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
    return view('front.index');
});
Route::get('/contact-us', function () {
    return view('front.contact-us');
});

Route::get('/terms-and-conditions', function () {
    $title = "Terms and Conditions";
    return view('front.terms-and-conditions',compact('title'));
});

Route::get('/privacy-policy', function () {
    $title = "Privacy Policy";
    return view('front.privacy-policy' ,compact('title'));
});

Route::get('/copyright', function () {
    $title = "Copyright Statement";
    return view('front.copyright' ,compact('title'));
});

Route::get('/health-and-safety', function () {
    return view('front.health-and-safety');
});

Route::get('/about-us', function () {
    return view('front.about-us');
});
