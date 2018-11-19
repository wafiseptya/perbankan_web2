<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
// Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
//     Route::get('/', 'DashboardController@index')->name('dash');
//     Route::resource('users', 'UserController');
// });

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
// Route::get('/teller', function () {
//     return view('admin.teller.teller-index');
// });
// Route::get('/admins', function () {
//     return view('admin.admin.admin-page');
// });
// Route::get('/penarikan', function () {
//     return view('admin.teller.teller-penarikan');
// });