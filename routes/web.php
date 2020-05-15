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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vege', 'VegeController@index')->name('vege.index')->middleware('auth');
Route::get('/vege/create', 'VegeController@create')->name('vege.create');
Route::post('/vege', 'VegeController@store')->name('vege.store');
Route::get('/vege/{id}', 'VegeController@show')->name('vege.show')->middleware('auth');
route::delete('/vege/{id}', 'VegeController@destroy')->name('vege.destroy')->middleware('auth');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes([
    'register' => false //karena ini order ,kalo sering register kaya facebook dong.. login kan untuk staff aja
]);

Route::get('/home', 'HomeController@index')->name('home');
