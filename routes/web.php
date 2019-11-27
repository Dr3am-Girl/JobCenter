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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 //for applicANT\
Route::get('applied/{id}', 'HomeController@applied_job');
Route::get('form', 'HomeController@form_for_post');
Route::post('post/job', 'HomeController@post_job');
Route::get('profile/update', 'HomeController@profile_update');
Route::post('update/profile/{id}', 'HomeController@update_profile');
Route::get('profile/show', 'HomeController@profile_show');
