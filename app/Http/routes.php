<?php



Route::auth();

Route::get('/','PagesController@index');
Route::resource('vakantie', 'VakantieController');
Route::post('vakantie', 'VakantieController@overview')->name('vakantie.overview');

Route::get('admin', ['middleware' => 'admin', 'uses' => 'AdminController@index']);

Route::resource('admin/country','CountryController');
Route::resource('admin/holiday','VakantieController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::auth();
