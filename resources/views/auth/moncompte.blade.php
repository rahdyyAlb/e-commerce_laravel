@extends('base')

@section('content')
    <div class="container py-5">
        <p>Bonjour, {{ $user->name }} {{ $user->prenom }} </p>
        <p>Votre adresse e-mail est {{ $user->email }}</p>
        <P> {{ $user->adress }}</P>
        <P>{{ $user->code_postal}}</P>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        </tbody>
    </table>
@endsection
