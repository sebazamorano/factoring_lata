<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Factoring Cloud - Geros
    </title>
    @if (auth()->check())
        <meta name="token" content="{{ auth()->user()->api_token }}">
    @endif
    <!-- Favicon -->
    <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('css/argon.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('css/argon-dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('nucleo/css/nucleo.css') }}" rel="stylesheet" />
    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
            <div class="container-fluid">
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand pt-0" href="./index.html">
                    <img src="{{asset('img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
                </a>
                <!-- User -->
                <ul class="nav align-items-center d-md-none">
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ni ni-bell-55"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
							<span class="avatar avatar-sm rounded-circle">
								<img alt="Image placeholder" src="{{asset('img/theme/team-1-800x800.jpg')}}">
							</span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Bienvenido!</h6>
                            </div>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>Mi cuenta</span>
                            </a>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-settings-gear-65"></i>
                                <span>Settings</span>
                            </a>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-calendar-grid-58"></i>
                                <span>Activity</span>
                            </a>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-support-16"></i>
                                <span>Support</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Collapse header -->
                    <div class="navbar-collapse-header d-md-none">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="./index.html">
                                    <img src="./assets/img/brand/blue.png">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Form -->
                    <form class="mt-4 mb-3 d-md-none">
                        <div class="input-group input-group-rounded input-group-merge">
                            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-search"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class=" nav-link" href="{{ route('home') }}"> <i class="ni ni-tv-2 text-primary"></i> Inicio
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('mis-ofertas') }}">
                                <i class="ni ni-planet text-blue"></i> Mis Ofertas
                            </a>
                        </li>
                        <li class="nav-item @if(request()->routeIs('clientes*')) active @endif">
                            <a class="nav-link @if(request()->routeIs('clientes*')) active @endif" href="{{ route('clientes.index') }}">
                                <i class="ni ni-single-02 text-blue"></i> Usuarios
                            </a>
                        </li>
                        <li class="nav-item @if(request()->routeIs('ejecutivos*')) active @endif">
                            <a class="nav-link @if(request()->routeIs('ejecutivos*')) active @endif" href="{{ route('ejecutivos.index') }}">
                                <i class="ni ni-single-02 text-orange"></i> Ejecutivos
                            </a>
                        </li>
                        @can('view-admin')
                        <li class="nav-item @if(request()->routeIs('administradores*')) active @endif">
                            <a class="nav-link @if(request()->routeIs('administradores*')) active @endif" href="{{ route('administradores.index') }}">
                                <i class="ni ni-single-02 text-yellow"></i> Administradores
                            </a>
                        </li>
                        @endcan
                        @can('view-factory')
                        <li class="nav-item @if(request()->routeIs('factories*')) active @endif">
                            <a class="nav-link @if(request()->routeIs('factories*')) active @endif" href="{{ route('factories.index') }}">
                                <i class="ni ni-single-02 text-yellow"></i> Factories
                            </a>
                        </li>
                        @endcan
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('cotiza') }}">
                                <i class="ni ni-pin-3 text-orange"></i> Cotizar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">
                                <i class="fa fa-chart-bar text-purple"></i> Operaciones
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main-content">
            <!-- Navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <!-- Brand -->
                    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="/">Dashboard</a>
                    <!-- User -->
                    <ul class="navbar-nav align-items-center d-none d-md-flex">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
								<span class="avatar avatar-sm rounded-circle">
									<img alt="Image placeholder" src="{{ asset('img/theme/team-4-800x800.jpg') }}">
								</span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->fullName }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Bienvenido!</h6>
                                </div>
                                <a href="./examples/profile.html" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>Mi Cuenta</span>
                                </a>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ni ni-user-run"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- Header -->
            <!-- <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> -->
            @yield('content')
        <!-- Footer -->
            <footer class="footer container-fluid">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            &copy; 2018 <a href="https://www.latadigital.cl" class="font-weight-bold ml-1" target="_blank">Latadigital</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                            <li class="nav-item">
                                <a href="https://www.latadigital.cl" class="nav-link" target="_blank">Latadigital</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.latadigital.cl/presentation" class="nav-link" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://blog.latadigital.cl" class="nav-link" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core   -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!--   Optional JS   -->
    <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
    <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
    <!--   Argon JS   -->
    <script src="{{asset('js/argon.js')}}"></script>
    <script src="{{asset('js/argon-dashboard.js')}}"></script>

    @yield('script')
</body>
</html>
