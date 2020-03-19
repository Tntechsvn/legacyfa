<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/home', 'HomeController@index')->name('home');

Route::get('list-company', [
	'as' => 'ListCompany',
	'uses' => 'HomeController@ListCompany'
]);

Route::get('list-category', [
	'as' => 'ListCategory',
	'uses' => 'HomeController@ListCategory'
]);

Route::get('list-plan', [
	'as' => 'ListPlan',
	'uses' => 'HomeController@ListPlan'
]);

Route::get('list-ridders', [
	'as' => 'ListRidders',
	'uses' => 'HomeController@ListRidders'
]);

