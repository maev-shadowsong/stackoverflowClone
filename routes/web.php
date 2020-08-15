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
Route::get('/', 'HomeController@index')->name('home');

Route::get('/master', function () {
    return view('adminlte.master');
});

//Route::get('/index', function () {
// return view('forum.index');
//});

//Route::get('/create', function () {
//   return view('forum.create');
//});

//Route::get('/edit', function () {
//   return view('forum.edit');
//});

//Route::get('/show', function () {
//   return view('forum.show');
//});

//Route::get('/komentar', function () {
//  return view('forum.komentar');
//});
// batas cek tampilan




//Route::resource('forum', 'HomeController')->middleware('auth');
//Route::resource('forum', 'ForumController');
Route::get('/forum/create', 'ForumController@create');
Route::post('/forum/create', 'ForumController@store');
Route::get('/forum/index', 'ForumController@index');
Route::get('/forum/{id}/edit', 'ForumController@edit');
Route::put('/forum/{id}', 'PertanyaanController@update');
Route::get('/forum/{id}', 'ForumController@show');
Route::get('/forum/komentar', 'ForumController@komentar');
Route::post('/forum/komentar', 'ForumController@store_komentar');
Route::get('/forum/jawaban', 'ForumController@jawaban');
Route::post('/forum/jawaban', 'ForumController@store_jawaban');




Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
