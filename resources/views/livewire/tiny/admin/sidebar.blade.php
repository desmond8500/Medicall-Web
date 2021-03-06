<div>
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100 mb-4 d-flex">
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('admin.index') }}">
                    {{-- <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                        xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                        </g>
                    </svg> --}}
                    <img src="{{ asset('src/images/logo/Logo.png') }}" alt="Logo" class="img-fluid">
                </a>
            </div>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Menu</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                {{-- <li class="nav-item dropdown">
                    <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-box fe-16"></i>
                        <span class="ml-3 item-text">UI elements</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./ui-color.html"><span class="ml-1 item-text">Colors</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./ui-typograpy.html"><span
                                    class="ml-1 item-text">Typograpy</span></a>
                        </li>

                    </ul>
                </li> --}}

                <li class="nav-item w-100">
                    <a class="nav-link" href="{{ route('index') }}">
                        <i class="fe fe-layers fe-16"></i>
                        <span class="ml-3 item-text">Acceuil</span>
                        <span class="float-right"> </span>
                    </a>
                </li>
                @foreach ($menus as $menu)
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route($menu->route) }}">
                            <i class="fe fe-layers fe-16"></i>
                            <span class="ml-3 item-text">{{ $menu->name }}</span>
                            <span class="float-right">{{ $menu->count }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </aside>
</div>
