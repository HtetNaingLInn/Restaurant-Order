<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false, 'logout' => false]);
Route::get('logout', 'auth\LoginController@logout')->name('logout');

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

    Route::get('table', 'TableController@index')->name('table.index');
    Route::post('table', 'TableController@store')->name('table.store');
    Route::get('table/{id}/delete', 'TableController@destroy')->name('table.destroy');

    Route::get('role', 'RoleController@index')->name('role.index');
    Route::get('role/{id}/edit', 'RoleController@edit')->name('role.edit');
    Route::post('role/{id}', 'RoleController@update')->name('role.update');

    Route::get('role/{id}/delete', 'RoleController@destroy')->name('role.destroy');

    Route::get('user', 'UserController@index')->name('user.index');
    Route::get('user/create', 'UserController@create')->name('user.create');
    Route::post('user', 'UserController@store')->name('user.store');
    Route::get('user/{id}/edit', 'UserController@edit')->name('user.edit');
    Route::post('user/{id}', 'UserController@update')->name('user.update');
    Route::get('user/{id}/delete', 'UserController@destroy')->name('user.destroy');
    Route::get('user/role/{id}', 'UserController@role')->name('user.role');
    Route::get('user/{id}/show', 'UserController@show')->name('user.show');

    Route::get('dashboard', 'DashController@dash')->name('dashboard');

});
