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

Route::get('b', function () {
    return view('front.layouts.master');
});
Route::get('/us', function () {
    return view('back.layouts.master');
});

Route::get('/category/{id}', 'HomePageController@adsByCategory');
Route::get('/details/{id}', 'HomePageController@adsDetails');
Route::get('/', 'HomePageController@index');

Route::get('addPost','PostController@create');
Route::post('addPost','PostController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('admin/post','admin\PostController');