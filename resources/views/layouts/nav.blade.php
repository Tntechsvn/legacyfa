<nav>
    <ul class="mainmenu">
        <li class="{{ Route::currentRouteNamed('home') ? 'active' : '' }}"><a href="{{route('home')}}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
        <li class="has-child"><a href=""><i class="fas fa-plus-circle"></i><span>ADD PFR</span></a>
            <ul class="sub-menu">
                <li class="{{ Route::currentRouteNamed('single-fact.add_new') ? 'active' : '' }}"><a href="{{route('single-fact.add_new')}}"><i class="fas fa-user"></i>Single Fact - Find</a></li>
                <li class="{{ Route::currentRouteNamed('single-fact.add_new') ? 'active' : '' }}"><a href="{{route('joint-fact.add_new')}}"><i class="fas fa-users"></i>Joint Fact - Find</a></li>
            </ul>
        </li>
        <li class="{{ Route::currentRouteNamed('listpfr') ? 'active' : '' }}"><a href="{{route('listpfr')}}"><i class="fas fa-list-alt"></i><span>View List PFR</span></a></li>
        <li class="{{ Route::currentRouteNamed('user.list') ? 'active' : '' }}"><a href="{{route('user.list')}}"><i class="fas fa-user-circle"></i><span>User</span></a></li>
        <li class="{{ Route::currentRouteNamed('plan.list') ? 'active' : '' }}"><a href="{{route('plan.list')}}"><i class="fas fa-clipboard-list"></i><span>Plans</span></a>
            <ul class="sub-menu">
                <li class="{{ Route::currentRouteNamed('plan.list') ? 'active' : '' }}"><a href="{{route('plan.list')}}"><i class="fas fa-user"></i>List Plan</a></li>
                <li class="{{ Route::currentRouteNamed('category.list') ? 'active' : '' }}"><a href="{{route('category.list')}}"><i class="fas fa-users"></i>List Category</a></li>
            </ul>
        </li>
        <li class="{{ Route::currentRouteNamed('riders.list') ? 'active' : '' }}"><a href="{{route('riders.list')}}"><i class="fas fa-clipboard-list"></i><span>Ridders</span></a></li> 
        <li class="{{ Route::currentRouteNamed('company.list') ? 'active' : '' }}"><a href="{{route('company.list')}}"><i class="fas fa-clipboard-list"></i><span>Company</span></a></li>  
    </ul>
</nav>