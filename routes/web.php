<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
});

Route::group(['middleware' => 'App\Http\Middleware\Admin'], function() {
    Route::resource('admin', 'UserController');
});

Route::group(['middleware' => 'App\Http\Middleware\Teller'], function() {
    Route::resource('teller', 'TellerController');
});

Route::group(['middleware' => 'App\Http\Middleware\CustomerService'], function() {
    Route::resource('cs', 'CSController');
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/teller', function () {
    return view('admin.teller.teller-index');
});
