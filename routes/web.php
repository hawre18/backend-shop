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


Route::group(['prefix'=>'admin','namespace'=>'App\Http\Controllers\admin'],function (){
    Route::resource('baners','BanerController');
    Route::resource('categories','CategoryController');
    Route::get('categories/delete/{id}','CategoryController@delete')->name('categories.delete');
    Route::resource('provinces','ProvinceController');
    Route::get('provinces/delete/{id}','ProvinceController@delete')->name('provinces.delete');
    Route::resource('cities','CityController');
    Route::get('cities/delete/{id}','CityController@delete')->name('cities.delete');
});

