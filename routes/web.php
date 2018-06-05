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

<<<<<<< HEAD
// route to show the login form
Route::get('login', 'HomeController@showLogin');

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

// route to logout
Route::get('logout', array('uses' => 'HomeController@doLogout'));
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 297a949670b77b2c672a1b694c5808bec85940c9
