<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/logged-in-part.css') }}" rel="stylesheet">
</head>
<body>
    <div id="overlay-slide" class=""></div>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="row">
                <div class="col-md-4 center">
                    @auth
                        <div class="user-name">
                            <span class="bold">LOGGED IN:</span>
                            <span>{{ Auth::user()->name }}</span>
                        </div>
                    @endauth    
                </div>

                <div class="col-md-4 center">
                    <div class="logo-container">
                        <!-- <img src="{{ asset('images/LogoBlue.png') }}"> -->
                        <h3 style="color: #fff; margin: 0;">LOGO IMAGE</h3>
                    </div>
                </div>

                <div class="col-md-4">
                    <div id="mobile-menu" style="margin-right: 0px;">
                        <div class="cusbutton">
                            <div class="top bar"></div>
                            <div class="middle bar"></div>
                            <div class="bottom bar"></div>
                            <div class="menutextbottom">MENU</div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
