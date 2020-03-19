<nav>
    <ul>
        <li class="{{ Route::currentRouteNamed('home') ? 'active' : '' }}"><a href="{{route('home')}}"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
        <li class="has-child"><a href=""><i class="fas fa-plus-circle"></i>ADD PFR</a>
            <ul class="sub-menu">
                <li><a href=""><i class="fas fa-user"></i>Single Fact - Find</a></li>
                <li><a href=""><i class="fas fa-users"></i>Joint Fact - Find</a></li>
            </ul>
        </li>
        <li><a href=""><i class="fas fa-list-alt"></i>View List PFR</a></li>
        <li><a href=""><i class="fas fa-user-circle"></i>User</a></li>
        <li class="{{ Route::currentRouteNamed('ListPlan') ? 'active' : '' }}"><a href="{{route('ListPlan')}}"><i class="fas fa-clipboard-list"></i>Plans</a>
            <ul class="sub-menu">
                <li><a href=""><i class="fas fa-user"></i>List Plan</a></li>
                <li class="{{ Route::currentRouteNamed('ListCategory') ? 'active' : '' }}"><a href="{{route('ListCategory')}}"><i class="fas fa-users"></i>List Category</a></li>
            </ul>
        </li>
        <li class="{{ Route::currentRouteNamed('ListRidders') ? 'active' : '' }}"><a href="{{route('ListRidders')}}"><i class="fas fa-clipboard-list"></i>Ridders</a></li> 
        <li class="{{ Route::currentRouteNamed('ListCompany') ? 'active' : '' }}"><a href="{{route('ListCompany')}}"><i class="fas fa-clipboard-list"></i>Company</a></li>         
    </ul>
</nav>