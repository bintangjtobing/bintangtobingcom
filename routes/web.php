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

use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/youtube', function () {
    // return view('home.youtube');
    return Redirect::to('http://www.youtube.com/c/BintangJeremiaTobing');
});
Route::get('/dark', function () {
    return view('dark');
});
Route::post('/postmessages', 'homeController@postemail');
Route::get('sign-in', 'SignController@index');


Route::get('/tool', function () {
    return view('dashII.index');
});
Route::get('/email', 'SignController@email');
Route::get('email/read/{message_id}', 'SignController@emailread');
