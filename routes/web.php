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

		Route::get('move-to-trash/{id}', [
			'as' => 'company.move_to_trash',
			'uses' => 'CompanyController@softDeleteCompany'
		]);

		Route::get('restore/{id}', [
			'as' => 'company.restore',
			'uses' => 'CompanyController@restoreCompany'
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
			'uses' => 'CategoryPlanController@listTrashCategoryPlan'
		]);

		Route::post('add-new', [
			'as' => 'category_plan.add_new',
			'uses' => 'CategoryPlanController@addNewCategoryPlan'
		]);

		Route::post('edit/{id}', [
			'as' => 'category_plan.edit',
			'uses' => 'CategoryPlanController@editCategoryPlan'
		]);

		Route::get('move-to-trash/{id}', [
			'as' => 'category_plan.move_to_trash',
			'uses' => 'CategoryPlanController@softDeleteCategoryPlan'
		]);

		Route::get('restore/{id}', [
			'as' => 'category_plan.restore',
			'uses' => 'CategoryPlanController@restoreCategoryPlan'
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

		Route::get('move-to-trash/{id}', [
			'as' => 'plan.move_to_trash',
			'uses' => 'PlanController@softDeletePlan'
		]);

		Route::get('restore/{id}', [
			'as' => 'plan.restore',
			'uses' => 'PlanController@restorePlan'
		]);
	});

	/*RIDER*/
	Route::group(['prefix' => 'rider'], function(){
		Route::get('/', [
			'as' => 'rider.list',
			'uses' => 'RiderController@listRider'
		]);

		Route::get('trash', [
			'as' => 'rider.list_trash',
			'uses' => 'RiderController@listTrashRider'
		]);

		Route::post('add-new', [
			'as' => 'rider.add_new',
			'uses' => 'RiderController@addNewRider'
		]);

		Route::post('edit/{id}', [
			'as' => 'rider.edit',
			'uses' => 'RiderController@editRider'
		]);

		Route::get('move-to-trash/{id}', [
			'as' => 'rider.move_to_trash',
			'uses' => 'RiderController@softDeleteRider'
		]);

		Route::get('restore/{id}', [
			'as' => 'rider.restore',
			'uses' => 'RiderController@restoreRider'
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
		Route::group(['prefix' => 'dependants'], function(){
			Route::get('/', [
				'as' => 'singlefact.dependants.list',
				'uses' => 'SingleFactController@listSingleFactDependants'
			]);
			Route::get('trash', [
			'as' => 'singlefact.dependants.list-trash',
			'uses' => 'SingleFactController@listSingleFactDependantsTrash'
			]);
			Route::get('assessment', [
				'as' => 'single-fact.assessment',
				'uses' => 'SingleFactController@addNewSingleFactAssessment'
			]);
			Route::get('question', [
				'as' => 'single-fact.question',
				'uses' => 'SingleFactController@addNewSingleFactQuestion'
			]);

		});
	});

	/*Joint Fact*/
	Route::group(['prefix' => 'joint-fact'], function(){
		// Route::get('/', [
		// 	'as' => 'ListSingleFact',
		// 	'uses' => 'JointFactController@listJointFact'
		// ]);

		Route::get('add-new', [
			'as' => 'joint-fact.add_new',
			'uses' => 'JointFactController@addNewJointFact'
		]);

	// 	Route::post('edit/{id}', [
	// 		'as' => 'joint-fact.edit',
	// 		'uses' => 'JointFactController@editJointFact'
	// 	]);	
	});

	/* USER */
	Route::group(['prefix' => 'user'], function(){
		Route::get('/', [
			'as' => 'user.list',
			'uses' => 'UserController@listUser'
		]);

		Route::get('trash', [
			'as' => 'user.list-trash',
			'uses' => 'UserController@listTrashUser'
		]);

		Route::post('add-new', [
			'as' => 'user.add_new',
			'uses' => 'UserController@addNewUser'
		]);

		Route::post('edit/{id}', [
			'as' => 'user.edit',
			'uses' => 'UserController@editUser'
		]);

		Route::get('move-to-trash/{id}', [
			'as' => 'user.move_to_trash',
			'uses' => 'UserController@softDeleteUser'
		]);

		Route::get('restore/{id}', [
			'as' => 'user.restore',
			'uses' => 'UserController@restoreUser'
		]);

		Route::get('downloadpdf/{id}', [
			'as' => 'downloadpdf',
			'uses' => 'UserController@downloadPdf'
		]);
	});
});
