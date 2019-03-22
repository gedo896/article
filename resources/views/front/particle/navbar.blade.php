<nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="300">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('Home') }}">Home</a>
            <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('article.index') }}" class="nav-link"><i class="nc-icon nc-book-bookmark"></i>Articles</a>
                </li>
                @can('user-only')
                    <li class="nav-item">
                        <a href="{{ route('article.create') }}" class="nav-link"><i class="nc-icon nc-album-2"></i>Add Article</a>
                    </li>
                @endcan
                @guest
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link"><i class="nc-icon nc-single-02"></i>Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link"><i class="nc-icon nc-single-02"></i>Register</a>
                </li>
                @else
                <li class="nav-item">
                        <a class="nav-link" title="logout" data-placement="bottom" href="{{ route('logout') }}">
                        <i class="fa fa-sign-out"></i>
                        <p class="d-lg-none">Logout</p>
                    </a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>