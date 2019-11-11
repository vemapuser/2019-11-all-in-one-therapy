<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') &ndash; Backend &ndash; All-in-one Therapy</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<nav class="links">
    <a href="{{ route('patients') }}">Patient</a>
    <a href="{{ route('/') }}">Rechnung</a>
    <a href="{{ route('/') }}">Termin</a>
    <a href="{{ route('/') }}">Dokumentation</a>
    |
    <a href="{{ route('/') }}">Frontend</a>
    <a href="{{ route('logout') }}">Logout</a>
</nav>
<div class="content">
    <div class="title m-b-md">
        @yield('title') &ndash; Backend &ndash; All-in-one Therapy
    </div>
    @if(session()->has('message'))
        <div class="message">
            {{ session('message') }}
        </div>
    @endif
    <main>
        @yield('main')
    </main>
</div>
</body>
</html>