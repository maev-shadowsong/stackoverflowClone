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


Route::get('/home', 'HomeController@index')->name('home');

Route::get('profil', 'ProfilController@edit')->name('forum.profil');

Route::post('profil', 'ProfilController@update');



//Route::resource('forum', 'HomeController')->middleware('auth');
//Route::resource('forum', 'ForumController');
Route::get('/forum', 'ForumController@index');
Route::get('/forum/create', 'ForumController@create');
Route::post('/forum/create', 'ForumController@store');
Route::get('/forum/index', 'ForumController@index');
Route::get('/forum/pertanyaanku', 'ForumController@indexku');
Route::get('/forum/{id}/edit', 'ForumController@edit');
Route::put('/forum/{id}', 'ForumController@update');
Route::get('/forum/{id}', 'ForumController@show');
Route::get('/forum/komentar', 'ForumController@komentar');
Route::post('/forum/komentar', 'ForumController@store_komentar');
Route::get('/forum/jawaban', 'ForumController@jawaban');
Route::post('/forum/jawaban', 'ForumController@store_jawaban');
Route::delete('/forum/{id}', 'ForumController@destroy');




Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
