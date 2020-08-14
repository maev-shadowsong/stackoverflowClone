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
// cek tampilan
Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/index', function () {
    return view('forum.index');
});

Route::get('/edit', function () {
    return view('forum.edit');
});

Route::get('/create', function () {
    return view('forum.create');
});

Route::get('/show', function () {
    return view('forum.show');
});

Route::get('/komentar', function () {
    return view('forum.komentar');
});
// batas cek tampilan

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
