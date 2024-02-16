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

Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    // Route::get('/', 'Auth\LoginController@login');
///////////////////////////////google login////////////////////////////////////
    Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')
        ->name('login.provider')
        ->where('driver', implode('|', config('auth.socialite.drivers')));

    Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')
        ->name('login.callback')
        ->where('driver', implode('|', config('auth.socialite.drivers')));
////////////////////////////////////////////////////////////////////////////////







// user system
Route::get('index', function () {
    return view('Home.index');
});
Route::get('admin', function (){
    return view('Home.admin');    
});
Route::get('admin', 'adminController@index')->name('admin');
//////////////////////////////////////////////////////////////////////////////////
Route::get('/givePerm/{id}', 'adminController@givePerm')->name('admin.givePerm');
Route::get('/revokeP/{id}', 'adminController@revokeP')->name('admin.revokeP');
Route::get('/removeP/{id}', 'adminController@removeP')->name('admin.removeP');
Route::get('/revoke_removeP/{id}', 'adminController@revoke_removeP')->name('admin.revoke_removeP');
//////////////////////////////////////////////////////////////////////////////////
Route::get('/giveM/{id}', 'adminController@giveM')->name('admin.giveM');
Route::get('/revokeM/{id}', 'adminController@revokeM')->name('admin.revokeM');
Route::get('/removeM/{id}', 'adminController@removeM')->name('admin.removeM');
Route::get('/revoke_removeM/{id}', 'adminController@revoke_removeM')->name('admin.revoke_removeM');
//////////////////////////////////////////////////////////////////////////////////
Route::get('/giveR/{id}', 'adminController@giveR')->name('admin.giveR');
Route::get('/revokeR/{id}', 'adminController@revokeR')->name('admin.revokeR');
Route::get('/removeR/{id}', 'adminController@removeR')->name('admin.removeR');
Route::get('/revoke_removeR/{id}', 'adminController@revoke_removeR')->name('admin.revoke_removeR');
////////////////////////////////////////////////////////////////
Route::get('/dis/{id}', 'adminController@dis')->name('admin.dis');
Route::get('/disR/{id}', 'adminController@disR')->name('admin.disR');
Route::resource('admin', 'adminController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();








