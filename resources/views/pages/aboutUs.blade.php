@extends('app')

@section('title', 'About US | ' . config('app.name'))

@section('content')

    <img src="{{ asset('/images/logo.png') }}" alt="logo Mistera" width="300px">

    <p>salama o,
    <p> MISTERA</p> no nanao ity application ity, izay namboarina taminy Laravel &hearts;
    <p>izy ity dia maneho ni fotoana am firenena misy anao</p>
    </p>

    <p> <a href="{{ route('app-home') }}">
            hiverina aminy voalohany eee
        </a>
    </p>
@endsection
