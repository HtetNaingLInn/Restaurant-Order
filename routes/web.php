<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false, 'logout' => false]);
Route::get('logout', 'auth\LoginController@logout')->name('logout');

Route::get('admin/dashboard', 'admin\DashController@dash')->name('dashboard')->middleware('auth');

Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('category', 'CategoryController@index')->name('category.index');
    Route::post('category', 'CategoryController@store')->name('category.store');
    Route::get('category/{id}/edit', 'CategoryController@edit')->name('category.edit');
    Route::post('category/{id}', 'CategoryController@update')->name('category.update');
    Route::get('category/{id}/delete', 'CategoryController@destroy')->name('category.destroy');
    Route::get('category/{id}/show', 'CategoryController@show')->name('category.show');

    Route::get('menu', 'MenuController@index')->name('menu.index');
    Route::get('menu/create', 'MenuController@create')->name('menu.create');
    Route::post('menu', 'MenuController@store')->name('menu.store');
    Route::get('menu/{id}/edit', 'MenuController@edit')->name('menu.edit');
    Route::post('menu/{id}', 'MenuController@update')->name('menu.update');
    Route::get('menu/{id}/delete', 'MenuController@destroy')->name('menu.destroy');
    Route::get('menu/category/{id}', 'MenuController@category')->name('menu.category');

});
