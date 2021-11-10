<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <title>{{ config('#', 'VitalWork') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>

    <!-- Fonts -->
  <!--  <link rel="dns-prefetch" href="//fonts.gstatic.com">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->
    <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<style>
    div.container {
        width: 100%;
    }
 </style>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('#', 'VitalWork') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        @can('users.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                        </li>
                        @endcan
                        @can('roles.index')
                        <li class="nav-item">                            
                            <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                        </li>
                        @endcan

                        @can('historiac.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('historiac.index') }}">Historia Clinica</a>
                        </li>
                        @endcan

                    @can('paciente.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('paciente.index') }}">Pacientes</a>
                        </li>
                        @endcan

                           @can('historias.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('historias.index') }}">Historia Social</a>
                        </li>
                        @endcan

                          @can('evolu.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('evolu.index') }}">Evolucion</a>
                        </li>
                        @endcan


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Inicio de Sesion</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->Nombre1 }} 
                                </a>

                                <ul class="dropdown-menu">
                                     <li><a href="{{url('user/password')}}">Cambiar mi Contraseña</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar sesión                                
                                       </a>
                                    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

   <!-- Scripts -->
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable({
           "paging":   true,
        "ordering": false,
        "info":     false
    });
} );</script>
</body>
</html>
