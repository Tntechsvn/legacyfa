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
Route::get('test', 'TestController@getTest');


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
		Route::get('add-new', [
			'as' => 'single-fact.show_form_add_new',
			'uses' => 'SingleFactController@showFormAddNewSingleFact'
		]);

		Route::post('add-new', [
			'as' => 'single-fact.add_new',
			'uses' => 'SingleFactController@addNewAndEditSingleFact'
		]);

		Route::get('{id}', [
			'as' => 'single_fact.edit',
			'uses' => 'SingleFactController@editSingleFact'
		]);

		Route::post('{id}', [
			'as' => 'single_fact.postedit',
			'uses' => 'SingleFactController@addNewAndEditSingleFact'
		]);
		
		Route::group(['prefix' => 'dependants/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'singlefact.dependant.list',
				'uses' => 'DependantController@listDependantSingle'
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

			/*property*/
			Route::post('add-new-property', [
				'as' => 'portfolio.add_new_property',
				'uses' => 'PortfolioController@addNewProperty'
			]);

			Route::post('edit-property/{position}', [
				'as' => 'portfolio.edit_property',
				'uses' => 'PortfolioController@editProperty'
			]);

			Route::get('delete-property/{position}', [
				'as' => 'portfolio.delete_property',
				'uses' => 'PortfolioController@deleteProperty'
			]);

			/*investment*/
			Route::post('add-new-investment', [
				'as' => 'portfolio.add_new_investment',
				'uses' => 'PortfolioController@addNewInvestment'
			]);

			Route::post('edit-investment/{position}', [
				'as' => 'portfolio.edit_investment',
				'uses' => 'PortfolioController@editInvestment'
			]);

			Route::get('delete-investment/{position}', [
				'as' => 'portfolio.delete_investment',
				'uses' => 'PortfolioController@deleteInvestment'
			]);

			/*saving*/
			Route::post('add-new-saving', [
				'as' => 'portfolio.add_new_saving',
				'uses' => 'PortfolioController@addNewSaving'
			]);

			Route::post('edit-saving/{position}', [
				'as' => 'portfolio.edit_saving',
				'uses' => 'PortfolioController@editSaving'
			]);

			Route::get('delete-saving/{position}', [
				'as' => 'portfolio.delete_saving',
				'uses' => 'PortfolioController@deleteSaving'
			]);

			/*cpf*/
			Route::post('add-new-cpf', [
				'as' => 'portfolio.add_new_cpf',
				'uses' => 'PortfolioController@addNewCpf'
			]);

			Route::post('edit-cpf/{position}', [
				'as' => 'portfolio.edit_cpf',
				'uses' => 'PortfolioController@editCpf'
			]);

			Route::get('delete-cpf/{position}', [
				'as' => 'portfolio.delete_cpf',
				'uses' => 'PortfolioController@deleteCpf'
			]);

			/*insurance*/
			Route::post('add-new-insurance', [
				'as' => 'portfolio.add_new_insurance',
				'uses' => 'PortfolioController@addNewInsurance'
			]);

			Route::post('edit-insurance/{position}', [
				'as' => 'portfolio.edit_insurance',
				'uses' => 'PortfolioController@editInsurance'
			]);

			Route::get('delete-insurance/{position}', [
				'as' => 'portfolio.delete_insurance',
				'uses' => 'PortfolioController@deleteInsurance'
			]);

			/*loan*/
			Route::post('add-new-loan', [
				'as' => 'portfolio.add_new_loan',
				'uses' => 'PortfolioController@addNewLoan'
			]);

			Route::post('edit-loan/{position}', [
				'as' => 'portfolio.edit_loan',
				'uses' => 'PortfolioController@editLoan'
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

		Route::group(['prefix' => 'cka/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'single_fact.cka.list',
				'uses' => 'CKAController@listCka'
			]);

			Route::post('add-new', [
				'as' => 'single_fact.cka.add_new',
				'uses' => 'CKAController@addNewCka'
			]);
		});

		Route::group(['prefix' => 'priorities-needs/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'single_fact.priorities_needs.show_form_rate_category',
				'uses' => 'PrioritiesNeedsController@showFormRateCategory'
			]);

			Route::post('rate-category', [
				'as' => 'single_fact.priorities_needs.rate_category',
				'uses' => 'PrioritiesNeedsController@rateCategory'
			]);

			Route::get('priotection-1', [
				'as' => 'single_fact.priorities_needs.priotection_1',
				'uses' => 'PrioritiesNeedsController@showFormAddProtectionOne'
			]);

			Route::post('add-priotection-1', [
				'as' => 'single_fact.priorities_needs.add_priotection_1',
				'uses' => 'PrioritiesNeedsController@addProtectionOne'
			]);

			Route::get('priotection-2', [
				'as' => 'single_fact.priorities_needs.priotection_2',
				'uses' => 'PrioritiesNeedsController@showFormAddProtectionTwo'
			]);

			Route::post('add-priotection-2', [
				'as' => 'single_fact.priorities_needs.add_priotection_2',
				'uses' => 'PrioritiesNeedsController@addProtectionTwo'
			]);

			Route::get('priotection-3', [
				'as' => 'single_fact.priorities_needs.priotection_3',
				'uses' => 'PrioritiesNeedsController@showFormAddProtectionThree'
			]);

			Route::post('add-priotection-3', [
				'as' => 'single_fact.priorities_needs.add_priotection_3',
				'uses' => 'PrioritiesNeedsController@addProtectionThree'
			]);

			Route::get('priotection-4', [
				'as' => 'single_fact.priorities_needs.priotection_4',
				'uses' => 'PrioritiesNeedsController@showFormAddProtectionFour'
			]);

			Route::post('add-priotection-4', [
				'as' => 'single_fact.priorities_needs.add_priotection_4',
				'uses' => 'PrioritiesNeedsController@addProtectionFour'
			]);

			Route::get('priotection-5', [
				'as' => 'single_fact.priorities_needs.priotection_5',
				'uses' => 'PrioritiesNeedsController@showFormAddProtectionFive'
			]);

			Route::post('add-priotection-5', [
				'as' => 'single_fact.priorities_needs.add_priotection_5',
				'uses' => 'PrioritiesNeedsController@addProtectionFive'
			]);

			Route::get('priotection-6', [
				'as' => 'single_fact.priorities_needs.priotection_6',
				'uses' => 'PrioritiesNeedsController@showFormAddProtectionSix'
			]);

			Route::post('add-priotection-6', [
				'as' => 'single_fact.priorities_needs.add_priotection_6',
				'uses' => 'PrioritiesNeedsController@addProtectionSix'
			]);

			Route::get('priotection-7', [
				'as' => 'single_fact.priorities_needs.priotection_7',
				'uses' => 'PrioritiesNeedsController@showFormAddProtectionSeven'
			]);

			Route::post('add-priotection-7', [
				'as' => 'single_fact.priorities_needs.add_priotection_7',
				'uses' => 'PrioritiesNeedsController@addProtectionSeven'
			]);

			Route::get('priotection-8', [
				'as' => 'single_fact.priorities_needs.priotection_8',
				'uses' => 'PrioritiesNeedsController@showFormAddProtectionEight'
			]);

			Route::post('add-priotection-8', [
				'as' => 'single_fact.priorities_needs.add_priotection_8',
				'uses' => 'PrioritiesNeedsController@addProtectionEight'
			]);

			Route::get('priotection-9', [
				'as' => 'single_fact.priorities_needs.priotection_9',
				'uses' => 'PrioritiesNeedsController@showFormAddProtectionNine'
			]);

			Route::post('add-priotection-9', [
				'as' => 'single_fact.priorities_needs.add_priotection_9',
				'uses' => 'PrioritiesNeedsController@addProtectionNine'
			]);

			Route::get('priotection-10', [
				'as' => 'single_fact.priorities_needs.priotection_10',
				'uses' => 'PrioritiesNeedsController@showFormAddProtectionTen'
			]);

			Route::post('add-priotection-10', [
				'as' => 'single_fact.priorities_needs.add_priotection_10',
				'uses' => 'PrioritiesNeedsController@addProtectionTen'
			]);

			Route::get('priotection-11', [
				'as' => 'single_fact.priorities_needs.priotection_11',
				'uses' => 'PrioritiesNeedsController@showFormAddProtectionEleven'
			]);

			Route::post('add-priotection-11', [
				'as' => 'single_fact.priorities_needs.add_priotection_11',
				'uses' => 'PrioritiesNeedsController@addProtectionEleven'
			]);
		});

		Route::group(['prefix' => 'affordability/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'single_fact.affordability.list',
				'uses' => 'AffordabilityController@listAffordability'
			]);

			Route::post('add-new', [
				'as' => 'single_fact.affordability.add_new',
				'uses' => 'AffordabilityController@addNewAffordability'
			]);
		});

		Route::group(['prefix' => 'analysis-recommendations/{id_pfr}'], function(){
			Route::get('/client-overview', [
				'as' => 'single_fact.analysis_recommendations.client_overview',
				'uses' => 'AnalysisRecommendationsController@clientOverview'
			]);

			Route::get('/plans-recommended', [
				'as' => 'single_fact.analysis_recommendations.plans-recommended',
				'uses' => 'AnalysisRecommendationsController@plansRecommended'
			]);
		});

		Route::group(['prefix' => 'switching-replacement/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'single_fact.switching_replacement',
				'uses' => 'SwitchingReplacementController@switchingReplacement'
			]);

			Route::post('add-new', [
				'as' => 'single_fact.switching_replacement.add_new',
				'uses' => 'SwitchingReplacementController@addNewAffordabilitySwitchingReplacement'
			]);
		});

		Route::group(['prefix' => 'client-acknowledgement/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'single_fact.client_acknowledgement',
				'uses' => 'ClientsAcknowledgementController@clientAcknowledgement'
			]);
		});
		Route::group(['prefix' => 'representatives-declaration/{id_pfr}'], function(){
			Route::get('/', [
				'as' => 'single_fact.representatives_declaration',
				'uses' => 'RepresentativesDeclarationController@representativesDeclaration'
			]);
		});

	});

/*Joint Fact*/
Route::group(['prefix' => 'joint-fact'], function(){
	Route::get('add-new', [
		'as' => 'joint-fact.show_form_add_new',
		'uses' => 'JointFactController@showFormAddNewJointFact'
	]);

	Route::post('add-new', [
		'as' => 'joint-fact.add_new',
		'uses' => 'JointFactController@addNewAndEditJointFact'
	]);

	Route::get('{id}', [
		'as' => 'join-fact.edit',
		'uses' => 'JointFactController@editJointFact'
	]);

	Route::post('{id}', [
		'as' => 'join-fact.postedit',
		'uses' => 'JointFactController@addNewAndEditJointFact'
	]);
		
	Route::group(['prefix' => '{id_pfr}'], function(){
		Route::group(['prefix' => 'dependants'], function(){
			Route::get('/', [
				'as' => 'jointfact.dependant.list',
				'uses' => 'DependantController@listDependantSingle'
			]);

			Route::get('trash', [
				'as' => 'singlefact.dependant.list_trash',
				'uses' => 'DependantController@listDependantTrashSingle'
			]);

		});

		Route::group(['prefix' => 'assessment'], function(){
			Route::get('/', [
				'as' => 'jointfact.show_form_add_new_assessment',
				'uses' => 'AssessmentController@showFormAddNewSingleAssessment'
			]);

			Route::post('/', [
				'as' => 'jointfact.add_new_assessment',
				'uses' => 'AssessmentController@addNewSingleAssessment'
			]);
		});
	});
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
