@extends('base')

@section('content')
    <div class="container py-5">
        <h1>Bonjour, {{ $user->name }}</h1>
        <p>Votre adresse e-mail est {{ $user->email }}</p>

        <a href="{{ route('products.index') }}" class="btn btn-primary">Voir mes produits</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Déconnexion</button>
        </form>
    </div>


@endsection
