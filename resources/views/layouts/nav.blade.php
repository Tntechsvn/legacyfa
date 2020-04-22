<nav>
    @php
    if(Auth::user()->is_admin){
        $array = [
            [
                'url' => 'home',
                'name' => 'Dashboard',
                'icon' => 'tachometer-alt'
            ],
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
            ],
            [
                'url' => 'user.list',
                'name' => 'User',
                'icon' => 'user'
            ],
            [
                'url' => 'plan.list',
                'name' => 'Plans',
                'icon' => 'list-alt',
                'children' => [
                    ['url' => 'plan.list',
                    'name' => 'List Plan',
                    'icon' => 'caret-right'],
                    ['url' => 'category.list',
                    'name' => 'List Category',
                    'icon' => 'caret-right'],
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
                'icon' => 'building'
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
                    <i class="fas fa-plus has-submenu radius_50"></i>
                @endif
                <a href="{{route($route['url'])}}"  data-title="{{$route['name']}}">
                    <i class="fas fa-{{$route['icon']}} "></i>
                    <span>{{$route['name']}}</span>
                </a>
                @if(isset($route['children']))
                    <ul class="sub-menu">
                    @foreach($route['children'] as $route)
                        <li class="">
                            <a href="{{route($route['url'])}}"  data-title="{{$route['name']}}">
                                <i class="fas fa-{{$route['icon']}}"></i>
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