<!-- SM, MD, LG Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#mobileNavbar" data-canvas="body">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    Timehunter
                </a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li @if (Route::currentRouteName() == 'dashboard') class="active" @endif>
                    <a class="fade-page-out" href="{{ route('charactersPage') }}">
                        <span class="glyphicons-regular glyphicons-dashboard"></span> Dashboard
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Route::currentRouteName() }}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-user"></span> {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                    </a>
                </li>
                <li>
                    <a class="fade-page-out" href="{{ route('logoutPage') }}">
                        <span class="glyphicon glyphicon-log-out"></span> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- XS Navigation -->
<nav id="mobileNavbar" class="navmenu navmenu-inverse navmenu-fixed-left offcanvas hidden-sm hidden-md hidden-lg"
     role="navigation">
    <a class="navmenu-brand" href="#">Timehunter</a>
    <ul class="nav navmenu-nav">
        <li @if (Route::currentRouteName() == 'dashboard') class="active" @endif>
            <a class="fade-page-out" href="{{ route('charactersPage') }}">
                <span class="glyphicons-regular glyphicons-dashboard"></span> Dashboard
            </a>
        </li>
        <li>
            <a href="#">
                <span class="glyphicon glyphicon-user"></span> {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
            </a>
        </li>
        <li>
            <a class="fade-page-out" href="{{ route('logoutPage') }}">
                <span class="glyphicon glyphicon-log-out"></span> Logout
            </a>
        </li>
    </ul>
</nav>