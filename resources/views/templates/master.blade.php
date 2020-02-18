<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @yield('header', View::make('includes.header'))

    <main class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-2">
                @yield('header', View::make('includes.sidebar'))
            </div>
            <div class="col-md-10">
                @yield('content')
            </div>
        </div>
    </main>

    @yield('footer', View::make('includes.footer'))
</div>
</body>
</html>