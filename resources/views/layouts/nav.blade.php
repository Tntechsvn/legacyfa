<nav>
    <ul class="mainmenu">
        <li class="{{ Route::currentRouteNamed('home') ? 'active' : '' }}"><a href="{{route('home')}}" title="Home"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
        <li class="has-child"><a href="Javascript:;" title="ADD PFR"><!-- <i class="fas fa-plus-circle"></i> --><i class="far fa-plus-square"></i><span>ADD PFR</span></a>
            <ul class="sub-menu">
                <li class="{{ Route::currentRouteNamed('single-fact.show_form_add_new') ? 'active' : '' }}"><a href="{{route('single-fact.show_form_add_new')}}" title="Single Fact - Find"><i class="fas fa-user"></i>Single Fact - Find</a></li>
                <li class="{{ Route::currentRouteNamed('joint-fact.show_form_add_new') ? 'active' : '' }}"><a href="{{route('joint-fact.show_form_add_new')}}" title="Joint Fact - Find"><i class="fas fa-users"></i>Joint Fact - Find</a></li>
            </ul>
        </li>
        <li class="{{ Route::currentRouteNamed('pfr.list') ? 'active' : '' }}"><a href="{{route('pfr.list')}}" title="View List PFR"><i class="fas fa-list-alt"></i><span>View List PFR</span></a></li>
        <li class="{{ Route::currentRouteNamed('user.list') ? 'active' : '' }}"><a href="{{route('user.list')}}" title="User"><!-- <i class="fas fa-user-circle"></i> --><i class="far fa-user"></i><span>User</span></a></li>
        <li class="{{ Route::currentRouteNamed('plan.list') ? 'active' : '' }} has-child"><a href="{{route('plan.list')}}" title="Plans"><!-- <i class="fas fa-clipboard-list"></i> --><i class="fas fa-book-open"></i><span>Plans</span></a>
            <ul class="sub-menu">
                <li class="{{ Route::currentRouteNamed('plan.list') ? 'active' : '' }}"><a href="{{route('plan.list')}}" title="List Plan"><i class="fas fa-caret-right"></i>List Plan</a></li>
                <li class="{{ Route::currentRouteNamed('category.list') ? 'active' : '' }}"><a href="{{route('category.list')}}" title="List Category"><i class="fas fa-caret-right"></i>List Category</a></li>
            </ul>
        </li>
        <li class="{{ Route::currentRouteNamed('rider.list') ? 'active' : '' }}"><a href="{{route('rider.list')}}" title="Riders"><!-- <i class="fas fa-file-alt"></i> --><i class="far fa-folder"></i><span>Riders</span></a></li>
        <li class="{{ Route::currentRouteNamed('company.list') ? 'active' : '' }}"><a href="{{route('company.list')}}" title="Company"><i class="fas fa-building"></i><span>Company</span></a></li>  
    </ul>
</nav>