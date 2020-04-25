<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'HomeController@logout')->name('user.logout');

//categories------------
Route::get('/categories', 'Backend\CategoryController@index')->name('categories');
Route::post('/store/categories', 'Backend\CategoryController@store')->name('store.category');
Route::get('/delete/category/{id}', 'Backend\CategoryController@destory')->name('delete.category');
Route::get('/edit/category/{id}', 'Backend\CategoryController@edit');
Route::post('/update/categories/{id}', 'Backend\CategoryController@update')->name('update.category');

//subcategory
Route::get('/subcategories', 'Backend\SubcategoryController@index')->name('subcategories');
Route::post('/store/subcategory', 'Backend\SubcategoryController@store')->name('store.subcategory');
Route::get('/delete/subcategory/{id}', 'Backend\SubcategoryController@destory')->name('delete.subcategory');
Route::get('/edit/subcategory/{id}', 'Backend\SubcategoryController@edit');
Route::post('/update/subcategories/{id}', 'Backend\SubcategoryController@update')->name('update.subcategory');