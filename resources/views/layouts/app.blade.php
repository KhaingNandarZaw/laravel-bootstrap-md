<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Bootstrap Material -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/bootstrap-material-design/dist/css/material-icons.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/bootstrap-material-design/dist/css/ripples.min.css') }}">
      <!-- End of Bootstrap Material -->

    <!-- Toastr -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/toastr/toastr.min.css') }}">
      <script type="text/javascript" src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('bower_components/toastr/toastr.min.js') }}"></script>
      <!-- End of Toastr -->

    <style>
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url('{{ URL::asset('fonts/Roboto/roboto-v15-latin-regular.eot') }}'); /* IE9 Compat Modes */
            src: local('Roboto'), local('Roboto-Regular'),
                 url('{{ URL::asset('fonts/Roboto/roboto-v15-latin-regular.eot?#iefix')  }}') format('embedded-opentype'), /* IE6-IE8 */
                 url('{{ URL::asset('fonts/Roboto/roboto-v15-latin-regular.woff2') }}') format('woff2'), /* Super Modern Browsers */
                 url('{{ URL::asset('fonts/Roboto/roboto-v15-latin-regular.woff') }}') format('woff'), /* Modern Browsers */
                 url('{{ URL::asset('fonts/Roboto/roboto-v15-latin-regular.ttf') }}') format('truetype'), /* Safari, Android, iOS */
                 url('{{ URL::asset('fonts/Roboto/roboto-v15-latin-regular.svg#Roboto') }}') format('svg'); /* Legacy iOS */
          }
        body {
            overflow-y: scroll;
            font-family: 'Roboto', Helvetica, sans-serif;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Bootstrap Material -->
      <script type="text/javascript" src="{{ URL::asset('bower_components/jquery-custom/jquery.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('bower_components/bootstrap-material-design/dist/js/material.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('bower_components/bootstrap-material-design/dist/js/ripples.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('bower_components/bootstrap-material-design/dist/js/snackbar.min.js') }}"></script>
      <!-- IMPORTANT -->
          <script>
            $.material.init();
          </script>
      <!-- End of Bootstrap Material -->

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
