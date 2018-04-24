<div class="navbar">
    <span class="navbar-brand mb-0 h1"><a href="/">BestBooks.sk</a></span>
    <form class="form-inline" method="GET" action="{{route('search')}}">
        <input class="form-control" type="search" placeholder="Hľadám..." aria-label="Vyhľadávanie" name="search">
        <button type="submit" class="btn btn-outline-secondary"><i class="fa fa-search"></i></button>
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
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>{{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if (Auth::user()->hasRole("ADMIN"))
                        <a class="dropdown-item" href="/books"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Správa produktov</a>
                    @endif
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        Odhlásiť sa
                    </a>
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
            @foreach($cathegories as $cathegory)
            <li class="nav-item">
                <a class="nav-link" href="#">{{$cathegory->name}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</nav>