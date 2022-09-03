<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title', config('app.name'))
        {{-- valeur par defaut = l'APP_NAME dans .env --}}
    </title>

</head>

<body>

    @yield('content')


    <footer>
        &copy; copyright : mistera.randriamanarina {{ date('Y') }}
        @if (!Route::is('app-about'))
            <a href="{{ route('app-about') }}"> Mombamomba anay</a>
        @endif

    </footer>
</body>

</html>
