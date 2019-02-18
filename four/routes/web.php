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
    return view('welcome');
});
Route::get('/jobview', function () {
    return view('jobs.joblist');
});
Route::get('/userview', function () {
    return view('jobs.userlist');
});
Route::get('/postjob', function () {
    return view('jobs.postjob');
});

// Route::get('/register', function () {
//     return view('jobs.joblist');
// });
Route::get('/userview','FourController@userview');
//Route::get('/register','FourController@register');
Route::get('/jobview','TestController@jobview');
Route::get('/job','FourController@emp');
Route::post('/postjob','TestController@post');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
