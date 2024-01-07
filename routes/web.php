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

    Route::resource('attributeGroups','AttributeController');
    Route::get('attributeGroups/delete/{id}','AttributeController@delete')->name('attributeGroups.delete');

    Route::resource('baners','BanerController');
    Route::resource('categories','CategoryController');
    Route::resource('brands','BrandController');
    Route::get('brands/delete/{id}','BrandController@delete')->name('brands.delete');
    Route::post('images/upload/brand', 'ImageController@brandImageUpload')->name('brandImage.Upload');

});


