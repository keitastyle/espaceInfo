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

Route::get('/modulecreation', 'ModuleController@create');
Route::get('/annonceForm', 'AnnonceController@create');
Route::post('/annonceForm', 'AnnonceController@store');
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});


Route::get('/show', function () {
    return view('annonce.show');
});

Route::get('/departementcreation', 'DepartementController@create');
Route::post('/departementcreation', "DepartementController@store");


Auth::routes();

Route::get('/home', 'HomeController@index');
