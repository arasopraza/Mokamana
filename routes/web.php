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

Route::get('/', 'PagesController@home');
Route::get('/galeri', 'PagesController@galeri');
Route::get('/tentang-kami', 'PagesController@tentangKami');
Route::get('/detail-hotel/id-hotel/{id}', 'HotelController@detailHotel');
Route::get('/hasil-pencarian', 'HotelController@searchHotel');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/profil', function(){
    return view('profile');
});
