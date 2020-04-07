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


Route::get('login', [
	'as' => 'show_form_login',
	'uses' => 'UserController@showFormLogin'
]);

Route::post('login', [
	'as' => 'login',
	'uses' => 'UserController@login'
]);

Route::get('logout', [
	'as' => 'logout',
	'uses' => 'UserController@logout'
]);

Route::group(['prefix' => 'admin', 'middleware' => 'loginMiddleware'], function(){

	Route::get('/', 'HomeController@index')->name('home');

	/* PFR */
	Route::group(['prefix' => 'pfr'], function(){
		Route::get('/', [
			'as' => 'pfr.list',
			'uses' => 'HomeController@listPfr'
		]);

		Route::get('trash', [
			'as' => 'pfr.list_trash',
			'uses' => 'HomeController@listTrashPfr'
		]);

		Route::get('move-to-trash/{id}', [
			'as' => 'pfr.move_to_trash',
			'uses' => 'HomeController@softDeletePfr'
		]);

		Route::get('restore/{id}', [
			'as' => 'pfr.restore',
			'uses' => 'HomeController@restorePfr'
		]);
	});

	/*COMPANY*/
	Route::group(['prefix' => 'company'], function(){
		Route::get('/', [
			'as' => 'company.list',
			'uses' => 'CompanyController@listCompany'
		]);

		Route::get('trash', [
			'as' => 'company.list_trash',
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
			'as' => 'category.list_trash',
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
			'as' => 'plan.list_trash',
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
			'as' => 'single-fact.show_form_add_new',
			'uses' => 'SingleFactController@showFormAddNewSingleFact'
		]);

		Route::post('add-new', [
			'as' => 'single-fact.add_new',
			'uses' => 'SingleFactController@addNewSingleFact'
		]);

		// Route::post('edit/{id}', [
		// 	'as' => 'single-fact.edit',
		// 	'uses' => 'SingleFactController@editSingleFact'
		// ]);
		
		Route::group(['prefix' => 'dependants/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'singlefact.dependant.list',
				'uses' => 'DependantController@listDependantSingle'
			]);

			Route::get('trash', [
				'as' => 'singlefact.dependant.list_trash',
				'uses' => 'DependantController@listDependantTrashSingle'
			]);

			Route::post('add-new', [
				'as' => 'singlefact.dependant.add_new',
				'uses' => 'DependantController@addNewDependant'
			]);

			Route::post('edit/{id_dependant}', [
				'as' => 'singlefact.dependant.edit',
				'uses' => 'DependantController@editDependant'
			]);

			Route::get('move-to-trash/{id_dependant}', [
				'as' => 'singlefact.dependant.move_to_trash',
				'uses' => 'DependantController@softDeleteDependant'
			]);

			Route::get('restore/{id_dependant}', [
				'as' => 'singlefact.dependant.restore',
				'uses' => 'DependantController@restoreDependant'
			]);
		});

		Route::group(['prefix' => 'assessment/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'single-fact.show_form_add_new_assessment',
				'uses' => 'AssessmentController@showFormAddNewSingleAssessment'
			]);

			Route::post('/', [
				'as' => 'single-fact.add_new_assessment',
				'uses' => 'AssessmentController@addNewSingleAssessment'
			]);
		});

		Route::group(['prefix' => 'question/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'single-fact.show_form_question',
				'uses' => 'PfrController@showFormQuestion'
			]);

			Route::post('/', [
				'as' => 'single-fact.add_new_question',
				'uses' => 'PfrController@addNewQuestion'
			]);
		});

		Route::group(['prefix' => 'portfolio/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'portfolio.list',
				'uses' => 'PortfolioController@listPortfolioSingle'
			]);

			Route::post('add-new-property', [
				'as' => 'portfolio.add_new_property',
				'uses' => 'PortfolioController@addNewProperty'
			]);

			Route::get('delete-property/{position}', [
				'as' => 'portfolio.delete_property',
				'uses' => 'PortfolioController@deleteProperty'
			]);

			Route::post('add-new-investment', [
				'as' => 'portfolio.add_new_investment',
				'uses' => 'PortfolioController@addNewInvestment'
			]);

			Route::get('delete-investment/{position}', [
				'as' => 'portfolio.delete_investment',
				'uses' => 'PortfolioController@deleteInvestment'
			]);

			Route::post('add-new-saving', [
				'as' => 'portfolio.add_new_saving',
				'uses' => 'PortfolioController@addNewSaving'
			]);

			Route::get('delete-saving/{position}', [
				'as' => 'portfolio.delete_saving',
				'uses' => 'PortfolioController@deleteSaving'
			]);

			Route::post('add-new-cpf', [
				'as' => 'portfolio.add_new_cpf',
				'uses' => 'PortfolioController@addNewCpf'
			]);

			Route::get('delete-cpf/{position}', [
				'as' => 'portfolio.delete_cpf',
				'uses' => 'PortfolioController@deleteCpf'
			]);

			Route::post('add-new-insurance', [
				'as' => 'portfolio.add_new_insurance',
				'uses' => 'PortfolioController@addNewInsurance'
			]);

			Route::get('delete-insurance/{position}', [
				'as' => 'portfolio.delete_insurance',
				'uses' => 'PortfolioController@deleteInsurance'
			]);

			Route::post('add-new-loan', [
				'as' => 'portfolio.add_new_loan',
				'uses' => 'PortfolioController@addNewLoan'
			]);

			Route::get('delete-loan/{position}', [
				'as' => 'portfolio.delete_loan',
				'uses' => 'PortfolioController@deleteLoan'
			]);
		});

		Route::group(['prefix' => 'balance/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'single_fact.balance.list',
				'uses' => 'BalanceController@listBalance'
			]);

			Route::post('add-new', [
				'as' => 'single_fact.balance.add_new',
				'uses' => 'BalanceController@addNewBalance'
			]);
		});

		Route::group(['prefix' => 'cash-flow/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'single_fact.cash_flow.list',
				'uses' => 'CashFlowController@listCashFlow'
			]);

			Route::post('add-new', [
				'as' => 'single_fact.cash_flow.add_new',
				'uses' => 'CashFlowController@addNewCashFlow'
			]);
		});

		Route::group(['prefix' => 'risk-profile/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'single_fact.risk_profile.list',
				'uses' => 'RiskProfileController@listRiskProfile'
			]);

			Route::post('add-new', [
				'as' => 'single_fact.risk_profile.add_new',
				'uses' => 'RiskProfileController@addNewRiskProfile'
			]);
		});
		Route::group(['prefix' => 'cka'], function(){
			Route::get('/', [
				'as' => 'single_fact.cka',
				'uses' => 'CKAController@cka'
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
		'as' => 'joint-fact.show_form_add_new',
		'uses' => 'JointFactController@showFormAddNewJointFact'
	]);

	Route::post('add-new', [
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
		'as' => 'user.list_trash',
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
		'uses' => 'HomeController@downloadPdf'
	]);
});
});
