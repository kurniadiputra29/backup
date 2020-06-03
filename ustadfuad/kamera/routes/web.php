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

Route::prefix('admin')->group(function (){
	Route::get('/dashboard', function () {
	    return view('dashboard.index');
	});
});

Route::prefix('admin')->group(function (){
	Route::get('user', 'UserController@index')->name('user.index');
	Route::get('user/create', 'UserController@create')->name('user.create');
	Route::post('user', 'UserController@store')->name('user.store');
	Route::get('user/{id}/edit', 'UserController@edit')->name('user.edit');
	Route::put('user/{id}', 'UserController@update')->name('user.update');
	Route::delete('user/{id}', 'UserController@destroy')->name('user.destroy');
	Route::get('user/json_user', 'UserController@json_user');
});


Route::prefix('admin')->group(function () {
	Route::resource('/payments', 'PaymentController');

	Route::resource('/rentals', 'RentalController');


	Route::get('json/payment', 'JsonController@payment')->name('json.payment');
});

Route::prefix('admin')->group(function () {
  Route::get('/categories/data', 'CategoryController@data')->name('categories.data');
  Route::resource('/categories', 'CategoryController');

});

Route::prefix('admin')->group(function (){
	Route::get('item', 'ItemController@index')->name('item.index');
	Route::get('item/create', 'ItemController@create')->name('item.create');
	Route::post('item', 'ItemController@store')->name('item.store');
	Route::get('item/{id}/edit', 'ItemController@edit')->name('item.edit');
	Route::put('item/{id}', 'ItemController@update')->name('item.update');
	Route::delete('item/{id}', 'ItemController@destroy')->name('item.destroy');
	Route::get('trash', 'ItemController@trash')->name('item.trash');
	Route::delete('trash/{id}', 'ItemController@forceDelete')->name('item.forceDelete');
});

Route::prefix('admin')->group(function (){
	Route::get('return', 'ReturnController@index')->name('return.index');
	Route::get('return/create', 'ReturnController@create')->name('return.create');
	Route::post('return', 'ReturnController@store')->name('return.store');
	Route::get('return/{id}/edit', 'ReturnController@edit')->name('return.edit');
	Route::put('return/{id}', 'ReturnController@update')->name('return.update');
	Route::delete('return/{id}', 'ReturnController@destroy')->name('return.destroy');
});