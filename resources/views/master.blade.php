<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/app.css" media="screen,projection" />
        @yield('styles')
        <script defer src="/js/all.js"></script>
        @yield('scripts')
    </head>

    <body>
        <header>
            @include('nav')
        </header>
        <div class="container-fluid">
            @yield('content')
        </div>
    </body>
</html>
