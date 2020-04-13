@php 
	$routes = [
		'single_fact.edit', 'single_fact.balance.list',
		'single_fact.cash_flow.list', 'portfolio.list',
		'single_fact.risk_profile.list', 'single_fact.cka.list',
		'single_fact.priorities_needs.show_form_rate_category'
	];
@endphp
@for($i=0;$i<count($routes);$i++)
	<li class="{{Request::route()->getName() == $routes[$i] ? 'active' : ''}}"><a href="{{route($routes[$i], $id)}}">{{$i+1}}</a></li>
@endfor
      <li><a href="javascript:;">8</a></li>
      <li><a href="javascript:;">9</a></li>
      <li><a href="javascript:;">10</a></li>