<div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index')}}">
                <img src="{{ asset('src/images/logo/Logo.png')}}" alt="" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    @if (!$users)
                        <li class="nav-item">
                            <a wire:click="init" class="nav-link">Initialiser</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a href="{{ route('index') }}" class="nav-link">Acceuil</a>
                    </li>
                    @auth
                        @foreach ($log_menus as $menu)
                            @if ($menu->role == Auth::user()->role)
                                <li class="nav-item {{  (request()->is("$menu->route")) ? 'active' : ''}}">
                                    <a href="{{ route($menu->route) }}" class="nav-link">{{ $menu->name }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endauth

                    @foreach ($menus as $menu)
                        <li class="nav-item {{  (request()->is("$menu->route")) ? 'active' : ''}}">
                            <a href="{{ route($menu->route) }}" class="nav-link">{{ $menu->name }}</a>
                        </li>
                    @endforeach

                    @auth
                        <li class="nav-item">
                            <a href="{!! route('logout') !!}" class="nav-link">
                                <i class="fa fa-sign-out"></i> Déconnexion
                            </a>
                        </li>
                    @endauth

                    @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">
                                <i class="fa fa-sign-in"></i> Connexion
                            </a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
