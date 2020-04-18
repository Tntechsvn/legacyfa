@php 
	$routes = [
		['single_fact.edit', 'singlefact.dependant.list', 'single-fact.show_form_add_new_assessment', 'single-fact.show_form_question'], 
		['single_fact.balance.list'],
		['single_fact.cash_flow.list'],
		['portfolio.list'],
		['single_fact.risk_profile.list'],
		['single_fact.cka.list'],
		[
			'single_fact.priorities_needs.show_form_rate_category',
			'single_fact.priorities_needs.priotection_1',
			'single_fact.priorities_needs.priotection_2',
			'single_fact.priorities_needs.priotection_3',
			'single_fact.priorities_needs.priotection_4',
			'single_fact.priorities_needs.priotection_5',
			'single_fact.priorities_needs.priotection_6',
			'single_fact.priorities_needs.priotection_7',
			'single_fact.priorities_needs.priotection_8',
			'single_fact.priorities_needs.priotection_9',
			'single_fact.priorities_needs.priotection_10',
			'single_fact.priorities_needs.priotection_11',
		],
		['single_fact.affordability.list'],
		['single_fact.analysis_recommendations.client_overview', 'single_fact.analysis_recommendations.plans-recommended'],
		['single_fact.switching_replacement']
	];
@endphp
@foreach($routes as $key=>$route)
	@php $active = in_array(Request::route()->getName(), $route) ? 'active' : '' @endphp
	<li class="{{$active}}"><a href="{{route($route[0], $id)}}">{{$key+1}}</a></li>
@endforeach