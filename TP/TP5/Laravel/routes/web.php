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
    return view('signin');
});

Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/signout', function () {
    return view('signout');
});

Route::get('/formpassword', function () {
    return view('formpassword');
});


Route::post('/adduser', function () {
    return view('adduser');
});

Route::post('/authenticate', function () {
    return view('authenticate');
});

Route::post('/changepassword', function () {
    return view('changepassword');
});

Route::get('/deleteuser', function () {
    return view('deleteuser');
});