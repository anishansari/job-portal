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
Route::get('/matching', function () {
    return view('jobs.jobmatching');	
});

Route::get('/profile', function () {
    return view('jobs.profile');	
});

Route::get('/userview', function () {

	if (request()->has('skills'))
{
	$user=App\User::where('skills',request('skills'))->paginate(5);
}
else{
	$user=App\User::paginete(5);
}
    return view('jobs.userlist');
});

Route::get('/postjob', function () {
    return view('jobs.postjob');
});

Route::get('/candidates', function () {
    return view('jobs.candidates');
});
Route::get('/deleteuser', function () {
    return view('jobs.deleteuser');
});



// Route::get('/register', function () {
//     return view('jobs.joblist');
// });
Route::get('/userview','FourController@userview');
Route::get('/deleteuser','FourController@deleteuser');
Route::get('/deletejob','FourController@deletejob');
//Route::get('/register','FourController@register');
Route::get('/jobview','TestController@jobview');
Route::get('/candidates','FourController@candidate');
Route::get('/matching','TestController@match');
Route::get('/jobapplied','TestController@jobapplied');
Route::get('/profile','FourController@profile');
Route::get('/job','FourController@emp');
Route::post('/postjob','TestController@post');
Route::get('/edit/{id}','FourController@edit');
Route::get('/delete/{id}','TestController@delete');
Route::get('/status','TestController@applyjob');
Route::get('/hirestatus','FourController@applyjob');
Route::post('/update','FourController@userupdate');
Route::post('/jobupdate','FourController@jobupdate');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view',['uses' => 'FourController@view','as' => 'view.emp']);
Route::get('/view1',['uses' => 'TestController@view1','as' => 'view1.emp']);

// if (request()->has('java'))
// {
// 	$user=App\User::where('skills',request('skills'))=>paginete(5);
// }
// else{
// 	$user=App\User::paginete(5);
// }

