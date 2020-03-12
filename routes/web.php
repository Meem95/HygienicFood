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

Route::group(['middleware'=>['auth','admin']], function (){
    Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function(){
        Route::resource('category','CategoryController');
        Route::resource('subcategory', 'SubCategoryController');
        Route::resource('brand','BrandController');
    });

    route::get('/admin/dashboard','Admin\DashboardController@index')->name('admin.dashboard');
});

Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'Frontend','middleware'=>['auth','user']],function(){

    route::get('/dashboard','UserDashboardController@index')->name('dashboard');
});
