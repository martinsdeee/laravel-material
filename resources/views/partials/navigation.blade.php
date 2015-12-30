<!-- Profile Dropdown Structure -->
<ul id="profile-dropdown" class="dropdown-content">
    <li>
        <a href="#!">
            <i class="material-icons left">account_circle</i>
            Profile
        </a>
    </li>
    <!-- <li>
        <a href="#!">
            <i class="material-icons left">notifications</i>
            Notifications
            <span class="badge new">23</span>
        </a>
    </li>
    <li>
        <a href="#!">
            <i class="material-icons left">settings</i>
            Settings
        </a>
    </li> -->
    <li class="divider"></li>
    <li>
        <a href="{{ url('/logout') }}">
            <i class="material-icons left">exit_to_app</i>
            Logout
        </a>
    </li>
</ul>

<nav class="{{ Config::get('template.primary-color') }} darken-2" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="{{ url('/') }}" class="brand-logo">
            <i class="material-icons left">photo</i>
            {{ Config::get('template.product') }}
        </a>
        <ul class="right hide-on-med-and-down">            
            <!-- Authentication Links -->
            @if (Auth::guest())
            <li>
                <a href="{{ url('/login') }}">
                    <i class="material-icons left">person</i>
                    Sign in
                </a>
            </li>
            <li>
                <a href="{{ url('/register') }}">
                    <i class="material-icons left">person_add</i>
                    Sign up
                </a>
            </li>
            @else
            <li>
                <a href="{{ url('/dashboard') }}">
                    <i class="material-icons left">dashboard</i>
                    Dashboard
                </a>
            </li>
            <li>
                <a class="dropdown-button" href="#!" data-activates="profile-dropdown">
                    <i class="material-icons left">account_circle</i>
                    {{ Auth::user()->name }}
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            @endif            
        </ul>

        <ul id="nav-mobile" class="side-nav" style="left: -250px;">
            <!-- Authentication Links -->
            @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Sign in</a></li>
            <li><a href="{{ url('/register') }}">Sign up</a></li>
            @else
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li class="divider"></li>
            <li>
                <a href="#!">
                    Profile
                </a>
            </li>
            <li>
                <a href="#!">
                    Settings
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="{{ url('/logout') }}">
                    Logout
                </a>
            </li>
            @endif    
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
