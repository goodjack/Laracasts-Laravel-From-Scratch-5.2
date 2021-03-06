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

/*
Route::get('/', function () {
	$people = ['Taylor', 'Matt', 'Jeffrey'];
	// $people = [];
    // return view('welcome');

    // return view('welcome', ['people' => $people]);
    return view('welcome', compact('people'));
    // return view('welcome')->with('people', $people);
    // return view('welcome')->withPeople($people);
});
*/

/*
Route::get('about', function() {
    return view('pages.about'); // resources/views/pages/about.blade.php
});
*/

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');

Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NotesController@store');

Route::get('notes/{note}/edit', 'NotesController@edit');
Route::patch('notes/{note}', 'NotesController@update');