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

Route::get('/', 'PagesController@index');
Route::get('/galeri', 'PagesController@galeri');
Route::get('/tentang-kami', 'PagesController@tentangKami');

Auth::routes();

Route::get('/home', 'HomeController@index');

//user
Route::get('/users', 'UserController@show');
Route::get('/users/{user}/edit-profile', 'UserController@edit');
Route::patch('/users/{user}', 'UserController@update');

//hotel
Route::get('/hasil-pencarian', 'HotelController@searchHotel');
Route::get('/detail-hotel/id-hotel/{id}', 'HotelController@detailHotel');
Route::get('/favorit-saya', 'BookmarkController@index');
Route::post('/bookmark', 'BookmarkController@create');
Route::delete('/bookmark/{id}', 'BookmarkController@destroy');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');