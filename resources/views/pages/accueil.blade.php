@extends('app')


@section('title', 'Accueil | ' . config('app.name'))


@section('content')
    <h1> Salama avy aty Madagascar</h1>
    <p>amin'ny {{ date('h:i A') }} ny fotoana aty aminay</p>
@endsection
