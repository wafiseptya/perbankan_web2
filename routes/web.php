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
Route::get('/teller/setor', function () {
    return view('admin.teller.teller-setor-index');
});
Route::get('/teller/tarik', function () {
    return view('admin.teller.teller-tarik-index');
});
