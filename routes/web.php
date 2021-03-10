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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/sym', function () {
    return view('symlinkexample');
});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});

Route::get('/cache', function () {
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    return "cache!";
});


// front end routes

Route::get('/','forntendController@home')-> name('home');
Route::get('/about','forntendController@about') -> name('about');
Route::get('/structure','forntendController@structure')-> name('structure');
Route::get('/parishad','forntendController@parishad')-> name('parishad');
Route::get('/staff','forntendController@staff')-> name('staff');
Route::get('/service','forntendController@service')-> name('service');
Route::get('/notice','forntendController@notice')-> name('notice');
Route::get('/notice-single/{id}','forntendController@noticeSingle')-> name('notice.single');
Route::get('/download','forntendController@download')-> name('download');
Route::get('/file/view/{id}','forntendController@fileView')-> name('file.view');
Route::get('/contact','forntendController@contact')-> name('contact');


