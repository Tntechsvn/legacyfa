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

/*Route::get('/', function () {
	return view('welcome');
});*/



Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', [
			'as' => 'login',
			'uses' => 'UserController@login'
		]);

Route::group(['prefix' => 'admin'], function(){

	/* list pdf */
	Route::get('list-pfr', [
			'as' => 'listpfr',
			'uses' => 'HomeController@listPfr'
		]);

	/*COMPANY*/
	Route::group(['prefix' => 'company'], function(){
		Route::get('/', [
			'as' => 'company.list',
			'uses' => 'CompanyController@listCompany'
		]);

		Route::get('trash', [
			'as' => 'company.list-trash',
			'uses' => 'CompanyController@listTrashCompany'
		]);

		Route::post('add-new', [
			'as' => 'company.add_new',
			'uses' => 'CompanyController@addNewCompany'
		]);

		Route::post('edit/{id}', [
			'as' => 'company.edit',
			'uses' => 'CompanyController@editCompany'
		]);
	});

	/*CATEGORY PLAN*/
	Route::group(['prefix' => 'category-plan'], function(){
		Route::get('/', [
			'as' => 'category.list',
			'uses' => 'CategoryPlanController@listCategoryPlan'
		]);

		Route::get('trash', [
			'as' => 'category.list-trash',
			'uses' => 'CategoryPlanController@listTrashCategory'
		]);

		Route::post('add-new', [
			'as' => 'category_plan.add_new',
			'uses' => 'CategoryPlanController@addNewCategoryPlan'
		]);

		Route::post('edit/{id}', [
			'as' => 'category_plan.edit',
			'uses' => 'CategoryPlanController@editCategoryPlan'
		]);
	});

	/*PLAN*/
	Route::group(['prefix' => 'plan'], function(){
		Route::get('/', [
			'as' => 'plan.list',
			'uses' => 'PlanController@listPlan'
		]);

		Route::get('trash', [
			'as' => 'plan.list-trash',
			'uses' => 'PlanController@listTrashPlan'
		]);

		Route::post('add-new', [
			'as' => 'plan.add_new',
			'uses' => 'PlanController@addNewPlan'
		]);

		Route::post('edit/{id}', [
			'as' => 'plan.edit',
			'uses' => 'PlanController@editPlan'
		]);
	});

	/*RIDER*/
	Route::group(['prefix' => 'rider'], function(){
		Route::get('/', [
			'as' => 'riders.list',
			'uses' => 'RiderController@listRider'
		]);

		Route::get('trash', [
			'as' => 'riders.list_trash',
			'uses' => 'RiderController@listTrashRiders'
		]);

		Route::post('add-new', [
			'as' => 'rider.add_new',
			'uses' => 'RiderController@addNewRider'
		]);

		Route::post('edit/{id}', [
			'as' => 'rider.edit',
			'uses' => 'RiderController@editRider'
		]);
	});

	/*Single Fact*/
	Route::group(['prefix' => 'single-fact'], function(){
		// Route::get('/', [
		// 	'as' => 'ListSingleFact',
		// 	'uses' => 'SingleFactController@listSingleFact'
		// ]);

		Route::get('add-new', [
			'as' => 'single-fact.add_new',
			'uses' => 'SingleFactController@addNewSingleFact'
		]);

		// Route::post('edit/{id}', [
		// 	'as' => 'single-fact.edit',
		// 	'uses' => 'SingleFactController@editSingleFact'
		// ]);
	});

	// /*Joint Fact*/
	// Route::group(['prefix' => 'joint-fact'], function(){
	// 	Route::get('/', [
	// 		'as' => 'ListSingleFact',
	// 		'uses' => 'JointFactController@listJointFact'
	// 	]);

	// 	Route::post('add-new', [
	// 		'as' => 'joint-fact.add_new',
	// 		'uses' => 'JointFactController@addNewJointFact'
	// 	]);

	// 	Route::post('edit/{id}', [
	// 		'as' => 'joint-fact.edit',
	// 		'uses' => 'JointFactController@editJointFact'
	// 	]);
	// });

	/* USER */
	Route::group(['prefix' => 'user'], function(){
		Route::get('/', [
			'as' => 'plan.user',
			'uses' => 'UserController@listUser'
		]);

		Route::get('trash', [
			'as' => 'user.list-trash',
			'uses' => 'UserController@listTrashUser'
		]);

		// Route::post('add-new', [
		// 	'as' => 'plan.add_new',
		// 	'uses' => 'PlanController@addNewPlan'
		// ]);

		// Route::post('edit/{id}', [
		// 	'as' => 'plan.edit',
		// 	'uses' => 'PlanController@editPlan'
		// ]);
	});
});
