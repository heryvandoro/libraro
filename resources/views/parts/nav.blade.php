<div class="navbar-fixed">
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="{{ url("/") }}" class="brand-logo left"><img class="logo-img" src="{{ asset("images/wide_libraro.png") }}"></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{ url("/books") }}">Browse</a></li>
                    <li><a href="{{ url("/how") }}">How To</a></li>
                    <li><a href="{{ url("/about") }}">About</a></li>
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown_accounts">Account<i class="material-icons right">arrow_drop_down</i></a>
                        <ul id="dropdown_accounts" class="dropdown-content">
                            <li><a href="{{ url("/login") }}">Login</a></li>
                            <li><a href="{{ url("/register") }}">Register</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url("/reset-password") }}">Forgot Password</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>