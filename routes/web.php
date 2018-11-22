<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::middleware(['admin'])->group(function () {
    Route::resource('admin', 'UserController');
});

Route::middleware(['teller'])->group(function () {
    Route::get('teller/tarik', 'TellerController@tarik')->name('teller.tarik');
    Route::get('teller/setor', 'TellerController@setor')->name('teller.setor');
    Route::put('teller/proses', 'TellerController@update')->name('teller.update');
    Route::resource('teller', 'TellerController')->except([
        'update'
    ]);    
});

Route::middleware(['cs'])->group(function () {
    Route::resource('cs', 'CSController');
});


Route::get('/forbid', function () {
    return view('unauthorized');
});

Route::get('/', function () {
    return view('auth.login');
});