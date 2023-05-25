@extends('base')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>

        </form>
        <a href="{{ route('register') }}">Vous souhaitez crée un compte ? cliquez ici</a>
    </div>
@endsection
