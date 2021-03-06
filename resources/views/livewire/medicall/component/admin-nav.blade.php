<nav class="navbar navbar-expand-lg navbar-dark bg-success mb-2">
    <div class="container">
        <a class="navbar-brand" href="{{ route("admin.index") }}">Medicall-Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($menus as $menu)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route($menu->route) }}">{{ $menu->name }}</a>
                    </li>
                @endforeach

            </ul>
            <div class="d-flex">
                <a class="btn btn-outline-light" href="{{ route('index') }}">Sortir</a>
            </div>
        </div>
    </div>
</nav>
