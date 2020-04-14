@php 
	$routes = [
		['single_fact.edit', 'singlefact.dependant.list', 'single-fact.show_form_add_new_assessment'], 
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
		]
	];
@endphp
@foreach($routes as $key=>$route)
	@php $active = in_array(Request::route()->getName(), $route) ? 'active' : '' @endphp
	<li class="{{$active}}"><a href="{{route($route[0], $id)}}">{{$key+1}}</a></li>
@endforeach
{{-- @for($i=0;$i<count($routes);$i++)
	<li class="{{Request::route()->getName() == $routes[$i] ? 'active' : ''}}"><a href="{{route($routes[$i], $id)}}">{{$i+1}}</a></li>
@endfor --}}
      <li><a href="javascript:;">8</a></li>
      <li><a href="javascript:;">9</a></li>
      <li><a href="javascript:;">10</a></li>