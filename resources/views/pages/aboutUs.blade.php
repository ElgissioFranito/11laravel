@extends('app')

@section('title', 'About US | ' . config('app.name'))

@section('content')

    <img src="/images/logo.png" alt="logo Mistera" width="300px">

    <p>salama o, ity dia application namboarina taminy Laravel &hearts; izay maneho ni fotoana am firenena misy anao
    </p>

    <p> <a href="{{ route('app-home') }}">
            hiverina aminy voalohany eee
        </a>
    </p>
@endsection
