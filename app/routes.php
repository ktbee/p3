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
	return View::make('hello');
});

Route::get('lolcats-ipsum', function()
{
	echo 'This page is for Lolcats Ipsum';
});

Route::get('user-gen', function()
{
	echo 'This page is for User Generator';
});

Route::get('wordscrape', function()
{
	$url = 'http://www.lolcatbible.com/index.php?title=Mark_1';
	$lolWords = file_get_contents($url);
	//strval($lolWords);

	preg_match_all ('<p>(.+?)</p>', $lolWords, $lolArray);

	print_r($lolArray);

	//echo $lolWords;	
	
});