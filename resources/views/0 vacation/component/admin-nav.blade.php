@php

$nav = json_decode('[
    { "titre": "Admin", "route": "admin.index" },
    { "titre": "Utilisateurs", "route": "admin.userlist" },
    { "titre": "Newsletter", "route": "admin.newsletter" },
    { "titre": "Rendez-Vous", "route": "admin.rv" },
    { "titre": "Blog", "route": "canvas" },
    { "titre": "Cvs", "route": "admin.inscription" },
    { "titre": "Todo", "route": "admin.todo" },
    { "titre": "Home", "route": "home" },
    { "titre": "Generator Builder", "route": "io_generator_builder" },
    {
        "titre": "Test",
        "route": [
            { "titre": "hello", "route": "hello"},
            { "titre": "hello", "route": "hello"},
            { "titre": "hello", "route": "hello"}
        ]
    }
]');
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        @foreach ($nav as $item)
            @if (!is_array($item->route))
            <li class="nav-item active">
                <a class="nav-link" href="{{ route($item->route) }}">{{ $item->titre }}<span class="sr-only">(current)</span></a>
            </li>
            @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ $item->titre }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach ($item->route as $subitem)
                    <a class="dropdown-item" href="{{$subitem->route}}">{{$subitem->titre}}</a>

                    @endforeach
                </div>
            </li>
            @endif
        @endforeach

    </ul>
  </div>
</nav>
