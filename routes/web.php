<?php

use Illuminate\Support\Facades\Auth;
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
   auth()->logout();
   return view('web.home');
});

Route::get('/properties', function () {
   return view('web.properties');
});

Route::get('/blogs', function () {
   return view('web.blogs');
});

Route::get('/propertyDetails', function () {
   return view('web.propertyDetails');
});

Route::get('/blogDetails', function () {
   return view('web.blogDetails');
});

Route::get('/about', function () {
   return view('web.about');
});

Route::get('/contact', function () {
   return view('web.contact');
});

Route::get('/agents', function () {
   return view('web.agents');
});

Route::get('/agentDetails', function () {
   return view('web.agentDetails');
});

Route::get('/faq', function () {
   return view('web.faq');
});

Route::get('/propertyDetails', function () {
   return view('web.propertyDetails');
});

Route::get('/propertyManagement', function () {
   return view('web.propertyManagement');
});

Route::get('/areas', function () {
   return view('web.areas');
});

Route::get('/areaDetails', function () {
   return view('web.areaDetails');
});

Route::get('/agencies', function () {
   return view('web.agencies');
});

Route::get('/agencyDetails', function () {
   return view('web.agencyDetails');
});

Auth::routes(['verify' => true, 'register' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('language/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('{path}', [App\Http\Controllers\HomeController::class, 'index'])->where('path', '([A-z\d\-\/_.]+)?');
