@extends('base')

@section('content')
    <div class="container py-5">
        <p>Bonjour, {{ $user->name }} {{ $user->prenom }} </p>
        <p>Votre adresse e-mail est {{ $user->email }}</p>
        <P> {{ $user->adress }}</P>
        <P>{{ $user->code_postal}}</P>
    </div>

@endsection
