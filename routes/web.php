<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/{name}/{yearOfIssue}', function ($nameOfFramework, $yearOfIssue) {
    return View::make('welcome')->with(
        array
        (
            'nameOfFramework' => $nameOfFramework,
            'yearOfIssue' => $yearOfIssue
        )
    );
});

Route::get('/login', function(){
    return View::make('login');
});

Route::get('/register', function(){
    return View::make('register');
});

Route::get('/database/{table}/{id}/{column}', 'DatabaseController@FetchData');


