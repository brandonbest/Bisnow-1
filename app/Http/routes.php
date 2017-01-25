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

Route::resource('news', 'NewsItemsController', ['only' => ['index', 'show']]);
Route::resource('events', 'EventItemsController', ['only' => ['index', 'show']]);
Route::resource('tracking', 'TrackingController', ['only' => ['store']]);

Route::any('/home', function () {
    return view('welcome');
});
Route::any('/', function () {
    return view('welcome');
});