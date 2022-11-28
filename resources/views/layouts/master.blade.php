<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>INAHINA</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    @vite(['resources/sass/app.scss','resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-white sticky-top" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                class="fas fa-coins me-2"></i>INAHINA
        </div>
        <div class="list-group list-group-flush my-3 sticky-top">
            <a href="/dashboard" class="list-group-item list-group-item-action bg-transparent second-text fw-bold
            {{ 'dashboard' == request()->path() ? 'active':'' }}">
                <i class="fas fa-tachometer-alt me-2"></i>
                Dashboard
            </a>


            {{--            <button class="btn btn-toggle list-group-item list-group-item-action bg-transparent second-text fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">--}}
            {{--                <i class="fas fa-users me-2"></i> Utilizadores--}}
            {{--            </button>--}}
            {{--            <div class="collapse" id="dashboard-collapse">--}}
            {{--                <ul class=" list-group list-group-flush">--}}
            {{--                    <li><a href="/role-register" class="list-group-item my-1 py-1 {{ 'role-register' == request()->path() ? 'active':'' }}">Supervisores</a></li>--}}
            {{--                    <li><a href="#" class="list-group-item my-1 py-1">Agentes</a></li>--}}

            {{--                </ul>--}}
            {{--            </div>--}}


            <a href="/role-register" class="list-group-item list-group-item-action bg-transparent second-text fw-bold
             {{ 'role-register' == request()->path() ? 'active':'' }}">
                <i class="fas fa-users me-2"></i>
                Utilizadores
            </a>
            <a href="/navios-register" class="list-group-item list-group-item-action bg-transparent second-text fw-bold
             {{ 'navios-register' == request()->path() ? 'active':'' }}">
                <i class="fas fa-anchor me-2"></i>
                Navios
            </a>
{{--            <a href="/message" class="list-group-item list-group-item-action bg-transparent second-text fw-bold--}}
{{--            {{ 'message' == request()->path() ? 'active':'' }}">--}}
{{--                <i class="fas fa-envelope me-2"></i>--}}
{{--                Messagens--}}
{{--            </a>--}}

{{--            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold--}}
{{--            ">--}}
{{--                <i class="fas fa-project-diagram me-2"></i>--}}
{{--                Delegações--}}
{{--            </a>--}}
{{--            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">--}}
{{--                <i class="fas fa-chart-line me-2"></i>--}}
{{--                Analytics--}}
{{--            </a>--}}
            <li class="nav-item dropdown list-group-item list-group-item-action bg-transparent fw-bold">
                <i class="fa-thin fa-gear"></i>
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fas fa-user me-2"></i>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="role-edit/{{ Auth::user()->id }}">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <main id="page-content-wrapper">
        <!-- Navbar start -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h2 class="fs-2 m-0">Dashboard</h2>
                <input class="form-control w-100 mx-3 py-2" type="search" placeholder="Procurar..." id="Mail-rearch">
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse show" id="navbarSupportedContent" style="">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <div class="nav-item nav-link ">

                        <a class="text-decoration-none" href="/home">
                            <i class="fa fa-store me-lg-2"></i>
                            Loja</a>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificacoes</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-user me-2"></i>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="role-edit/{{ Auth::user()->id }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Navbar End -->

        @yield('content')

        <!-- Footer Start -->
        <footer class="pt-4">
            <div class="d-flex flex-column flex-sm-row justify-content-between py-3 border-top">
                <p>&copy; 2022 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter"/>
                            </svg>
                        </a></li>
                    <li class="ms-3"><a class="link-dark" href="#">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram"/>
                            </svg>
                        </a></li>
                    <li class="ms-3"><a class="link-dark" href="#">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook"/>
                            </svg>
                        </a></li>
                </ul>
            </div>
        </footer>
    </main>
</div>


<script>
    let el = document.getElementById("wrapper");
    let toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="dashboard.js"></script>

</body>

</html>
