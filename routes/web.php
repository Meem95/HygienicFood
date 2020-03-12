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
    return view('frontend.master');
});

Route::get('/products', function () {
    return view('frontend.product.index');
});
Route::get('/products/details', function () {
    return view('frontend.product.details');
});

Route::get('/wishlist', function () {
    return view('frontend.wishlist.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function(){

    route::get('/dashboard','DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'Frontend','middleware'=>['auth','user']],function(){

    route::get('/dashboard','UserDashboardController@index')->name('dashboard');
});
