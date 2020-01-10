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


/* ------------------------------------------------------------------------
| Public routing */
Route::get('/', 'UserController@signin');
Route::get('signin', 'UserController@signin');
Route::get('signup', 'UserController@signup');
Route::post('authenticate', 'UserController@authenticate');
Route::post('adduser', 'UserController@addUser');
// ------------------------------------------------------------------------

/* ------------------------------------------------------------------------
| Admin routing */
Route::prefix('admin')->middleware( 'myuser.auth')->group( function() {

    Route::get('welcome', 'UserController@welcome');
    Route::get('ajout', 'SocksController@ajout');
    Route::get('sockList', 'SocksController@sockList');
    Route::post('ajout', 'SocksController@ajouterChaus');
    Route::get('formpassword', 'UserController@formpassword');
    Route::get('infouser', 'UserController@infouser');
    Route::post('changepassword', 'UserController@changePassword');
    Route::get('deleteuser', 'UserController@deleteUser');
    Route::get('signout', 'UserController@signout');

});
// ------------------------------------------------------------------------
