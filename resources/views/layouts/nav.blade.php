<nav>
    @php
    if(Auth::user()->is_admin){
        $array = [
            [
                'url' => 'home',
                'name' => 'Dashboard',
                'icon' => 'dashboard'
            ],
            [
                'url' => 'pfr.list',
                'name' => 'View List PFR',
                'icon' => 'list',
                'children' => [
                    ['url' => 'single-fact.show_form_add_new',
                    'name' => 'Single Fact - Find',
                    'icon' => 'chevron-right'],
                    ['url' => 'joint-fact.show_form_add_new',
                    'name' => 'Joint Fact - Find',
                    'icon' => 'chevron-right'],
                ]
            ],
            [
                'url' => 'user.list',
                'name' => 'User',
                'icon' => 'users'
            ],
            [
                'url' => 'plan.list',
                'name' => 'Plans',
                'icon' => 'library',
                'children' => [
                    ['url' => 'plan.list',
                    'name' => 'List Plan',
                    'icon' => 'chevron-right'],
                    ['url' => 'category.list',
                    'name' => 'List Category',
                    'icon' => 'chevron-right'],
                ]
            ],
            [
                'url' => 'rider.list',
                'name' => 'Riders',
                'icon' => 'folder'
            ],
            [
                'url' => 'company.list',
                'name' => 'Company',
                'icon' => 'apartment'
            ]
        ];
    }else {
        $array = [
            [
                'url' => 'pfr.list',
                'name' => 'View List PFR',
                'icon' => 'list-alt',
                'children' => [
                    ['url' => 'single-fact.show_form_add_new',
                    'name' => 'Single Fact - Find',
                    'icon' => 'chevron-right'],
                    ['url' => 'joint-fact.show_form_add_new',
                    'name' => 'Joint Fact - Find',
                    'icon' => 'chevron-right'],
                ]
            ]
        ];
    }

    @endphp
    <ul class="mainmenu">
        @foreach( $array as $route )
            @php $active = Request::route()->getName() == $route['url'] ? 'active' : '' @endphp
            <li class="{{(isset($route['children'])) ? 'has-child' : ''}} {{$active}}">
                @isset($route['children'])
                    <i class="lni lni-circle-plus has-submenu"></i>
                @endif
                <a href="{{route($route['url'])}}"  data-title="{{$route['name']}}">
                    <i class="lni lni-{{$route['icon']}} "></i>
                    <span>{{$route['name']}}</span>
                </a>
                @if(isset($route['children']))
                    <ul class="sub-menu">
                    @foreach($route['children'] as $route)
                        <li class="">
                            <a href="{{route($route['url'])}}"  data-title="{{$route['name']}}">
                                <i class="lni lni-{{$route['icon']}}"></i>
                                <span>{{$route['name']}}</span>
                            </a>
                        </li>
                    @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</nav>