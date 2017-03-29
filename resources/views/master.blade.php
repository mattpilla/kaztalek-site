<!DOCTYPE html>
<!--
      MMMMMMM          MMM
    MM:      MM       MZ77M
   M+          M      M777ZM
  M+           :M    M777$8M
  M:            :M  M77ZZ8M
 M+            M M M77ZZMM
 M+      MM    M :M77Z$M
 M:      MM     MM77ZMM
 M:           MM$77ZM
M+:          MZ77ZOM
M::          M77ZMMM  fuck
M::          M777OMM
M::           MZ77OM
M::            M$77$MM
M+:             MZ777ZMM
 M:              MZZ777ZM
 M::              M8Z7777M
 M+:              MMMZ$77M
  M:            ::M  M8ZZM
  M++::        ::M    MMM
   M+::::::::::+M
    MM++::::++MM
      MMMMMMMM
-->
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>@yield('title')</title>

        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="kaztalek.com">
        <meta name="twitter:description" content="the shittiest website on this earth">
        <meta name="twitter:image" content="https://kaztalek.com/public/images/preview120.png">

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
