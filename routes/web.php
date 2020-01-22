<?php

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
    return view('index');
});

Route::get('/activities', function () {
    return view('enquires');
});

Route::get('/details', function () {
    return view('details');
});

Route::post('/post-schedule', 'Base\HomepageController@Schedule')->name('post-schedule');