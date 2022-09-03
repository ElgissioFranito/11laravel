@extends('app')


@section('title', 'Accueil | ' . config('app.name'))


@section('content')

    <img src=" {{ asset('/images/flag-waving.png') }} " alt="Madagascar flag" width="300px">

    <h1> Salama avy aty Madagascar</h1>
    <p>amin'ny {{ date('h:i A') }} ny fotoana aty aminay</p>
@endsection
