@include('admin.layouts.header')
<body>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
        @include('admin.layouts.aside')
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav class="md-screen-header navbar-light">
        <div class="d-flex justify-content-between align-items-center">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="navbar-nav d-flex flex-row me-3">
                <!-- Dark Mode -->
                <li class="nav-item">
                    <div class="toggle-theme me-2">
                        <label for="dark-mode" class="position-relative d-flex align-items-center justify-content-between px-2">
                            <input type="checkbox" name="dark-mode" id="dark-mode" class="position-absolute opacity-0">
                            <span class="toggle-slider position-absolute top-0 start-0 bottom-0 end-0 bg-dark"></span>
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                        </label>
                    </div>
                </li>
                <!-- Notification dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                       role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Some news</a></li>
                        <li><a class="dropdown-item" href="#">Another news</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Something else</a>
                        </li>
                    </ul>
                </li>

                <!-- Icon -->
                <li class="nav-item">
                    <a class="nav-link me-3 me-lg-0" href="#">
                        <i class="fas fa-fill-drip"></i>
                    </a>
                </li>
                <!-- Icon -->
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://github.com/Sadegh-Jabbari">
                        <i class="fab fa-github"></i>
                    </a>
                </li>

                <!-- Icon dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown" role="button"
                       data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="iran flag m-0"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#"><i class="iran flag"></i>??????????
                                <i class="fa fa-check text-success ms-2"></i></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="china flag"></i>??????</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="japan flag"></i>?????????</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="france flag"></i>Fran??ais</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="spain flag"></i>Espa??ol</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="russia flag"></i>??????????????</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="portugal flag"></i>Portugu??s</a>
                        </li>
                    </ul>
                </li>

                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                       id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22"
                             alt="" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">?????????????? ????</a></li>
                        <li><a class="dropdown-item" href="#">??????????????</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                ????????
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Brand & Search form -->
        <div class="pt-2 d-flex align-items-center">
            <div class="logo mt-1 mx-3">
                <a href="#">
                    <img src="{{url('/')}}/admin/img/logo.svg" alt="logo">
                </a>
            </div>
            <div class="search d-flex align-items-center flex-grow-1 px-2 me-3">
                <form action="" class="w-100">
                    <div class="input-group flex-nowrap align-items-center">
                        <span class="input-group-text border-0 p-0 justify-content-center" id="search-addon"><i class="fas fa-search"></i></span>
                        <input type="search" class="form-control rounded search p-0" placeholder="?????????? (???????????? ???????? ???? ctrl + '/')" aria-label="Search" aria-describedby="search-addon"/>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top  lg-screen-header d-none">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

{{--            <!-- Brand -->--}}
{{--            <a class="navbar-brand" href="#">--}}
{{--                <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25" alt="" loading="lazy" />--}}
{{--            </a>--}}
{{--            <!-- Search form -->--}}
{{--            <form class="d-none d-md-flex input-group w-auto my-auto">--}}
{{--                <input autocomplete="off" type="search" class="form-control rounded"--}}
{{--                       placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />--}}
{{--                <span class="input-group-text border-0"><i class="fas fa-search"></i></span>--}}
{{--            </form>--}}

            <!-- Brand & Search form -->
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{url('/')}}/admin/img/logo.svg" height="25" alt="logo" loading="lazy" />
                </a>
                <div class="search d-flex align-items-center flex-grow-1 px-2 me-3">
                    <form action="" class="w-100">
                        <div class="input-group flex-nowrap align-items-center">
                            <span class="input-group-text border-0 p-0 justify-content-center" id="search-addon"><i class="fas fa-search"></i></span>
                            <input type="search" class="form-control rounded search p-0" placeholder="?????????? (???????????? ???????? ???? ctrl + '/')" aria-label="Search" aria-describedby="search-addon"/>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Dark Mode -->
                <li class="nav-item">
                    <div class="toggle-theme me-2">
                        <label for="dark-mode" class="position-relative d-flex align-items-center justify-content-between px-2">
                            <input type="checkbox" name="dark-mode" id="dark-mode" class="position-absolute opacity-0">
                            <span class="toggle-slider position-absolute top-0 start-0 bottom-0 end-0 bg-dark"></span>
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                        </label>
                    </div>
                </li>
                <!-- Notification dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                       role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Some news</a></li>
                        <li><a class="dropdown-item" href="#">Another news</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Something else</a>
                        </li>
                    </ul>
                </li>

                <!-- Icon -->
                <li class="nav-item">
                    <a class="nav-link me-3 me-lg-0" href="#">
                        <i class="fas fa-fill-drip"></i>
                    </a>
                </li>
                <!-- Icon -->
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://github.com/Sadegh-Jabbari">
                        <i class="fab fa-github"></i>
                    </a>
                </li>

                <!-- Icon dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown" role="button"
                       data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="iran flag m-0"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#"><i class="iran flag"></i>??????????
                                <i class="fa fa-check text-success ms-2"></i></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="china flag"></i>??????</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="japan flag"></i>?????????</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="france flag"></i>Fran??ais</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="spain flag"></i>Espa??ol</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="russia flag"></i>??????????????</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="portugal flag"></i>Portugu??s</a>
                        </li>
                    </ul>
                </li>

                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                       id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22"
                             alt="" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">?????????????? ????</a></li>
                        <li><a class="dropdown-item" href="#">??????????????</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                ????????
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>

@yield("main")




@include('admin.layouts.footer')


