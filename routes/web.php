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
Route::get('/odontograma', function () {
    return view('odontograma');
});

Route::get('canvas_odontograma', function() {
    return view('canvas_odontograma');
});
Route::get('opciones_canvas', function() {
    return view('opciones_canvas');
});
Route::get('odontograma_html', function() {
    return view('odontograma_html');
});

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
