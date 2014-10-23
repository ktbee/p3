<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('lolcats-ipsum', function()
{
	return View::make('lolcats-ipsum');
});

Route::get('user-gen', function()
{
	return View::make('user-gen');
});

