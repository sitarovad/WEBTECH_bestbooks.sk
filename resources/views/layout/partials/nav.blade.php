<div class="navbar">
    <span class="navbar-brand mb-0 h1"><a href="/">BestBooks.sk</a></span>
    <form class="form-inline">
        <input class="form-control" type="search" placeholder="Hľadám..." aria-label="Vyhľadávanie">
    </form>
    <ul class="nav justify-content-end">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="{{ route('login') }}">Prihlásiť sa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="{{ route('register') }}">Registrovať sa</a>
            </li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        Odhlásiť sa
                    </a>
                    <a class="dropdown-item" href="/books">Administrátrské rozhranie</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        <li class="nav-item">
            <button type="button" class="btn btn-info">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Košík</button>
        </li>
    </ul>
</div>
<nav id="menu" class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCathegories" aria-controls="navbarCathegories"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarCathegories">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Beletria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pre deti a mládež</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Životopisné</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cudzojazyčné</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">História</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Umenie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Voľný čas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cestovanie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Zdravie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Učebnice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Viac</a>
            </li>
        </ul>
    </div>
</nav>