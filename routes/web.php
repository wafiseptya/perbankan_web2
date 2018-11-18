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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teller', function () {
    return view('admin.teller.teller-index');
});
Route::get('/admins', function () {
    return view('admin.admin.admin-page');
});
Route::get('/penarikan', function () {
    return view('admin.teller.teller-penarikan');
});