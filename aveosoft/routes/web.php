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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','ProfileController@index');

Route::group(['middleware' => ['auth']], function(){
	Route::get('stripe', function () {
	    return view('stripe');
	});
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('profile/update','ProfileController@update');


