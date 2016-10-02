<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return "Contact Page";
});

Route::match(['get', 'post'], '/about', function () {
    return "Working with match";
});

Route::get('/tutorial/{id?}', function ($id = null) {
    return "tutorial id: {$id}";
});

Route::get('/link',['as'=>'link', function () {
    return 'Link <a href="'.route('deteals').'">Deteals</a>';
}]);

Route::get('/about/deteals',['as'=>'deteals', function () {
    return "test deteals";
}]);

Route::group(['prefix'=>'admin'], function () {
    Route::get('/contact', function () {
    	return "Administration Contacts Page!";
	});
	 Route::get('/about', function () {
    	return "Administration About Page!";
	});
});

Route::get('/administration', 'Administration\UserController@index');

Route::get('/home', 'HomeController@index');

Route::get('/account',['account'=>'AccountController@Index','as'=>'account']);

