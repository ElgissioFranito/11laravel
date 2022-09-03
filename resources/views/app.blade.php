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
        <a href="/aboutUs"> Mombamomba anay</a>
    </footer>
</body>

</html>