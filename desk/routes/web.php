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

Route::get('/', 'PageController@dashboard');

Route::get('/index', 'PageController@dashboard');

Route::get('/reservation', 'PageController@reservation');

Route::get('/calendar', 'PageController@calendar');

Route::get('/rooms', 'PageController@rooms');

Route::get('/guest', 'PageController@guest');

Route::get('/inventory', 'PageController@inventory');





