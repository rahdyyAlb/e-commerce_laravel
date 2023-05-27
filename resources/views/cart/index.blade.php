@extends('base')

@section('content')
        @if($total)
            <h2>Votre Panier : </h2>
            <div class="tab-panier">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Prix Unitaire</th>
                        <th scope="col">Prix total</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($content as $item)
                        <tr>
                            <form action="{{ route('card.update', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <th scope="row">
                                    <img class="img-panier" src="{{ asset('images/'.$item->associatedModel->img ) }}" alt="">
                                </th>
                                <td>
                                    {{ $item->name }}

                                </td>
                                <td>{{$item->price}}</td>
                                <td>{{ number_format($item->quantity * $item->price, 2, ',', ' ') }} €</td>
                                <td>
                                    <input name="quantity" id="input-quantity" type="number" style="height: 2rem" min="1" value="{{ $item->quantity }}">
                                    <button type="submit" class="btn btn-success">+</button>

                                </td>
                            </form>
                            <td>
                                <form action="{{ route('card.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row" style="background-color: lightgrey">
                    <div class="col s6">
                        Total TTC (hors livraison)
                    </div>
                    <div class="col s6">
                        <strong>{{ number_format($total, 2, ',', ' ') }} €</strong>
                    </div>

                </div>

                <div id="action" class="card-action ">
                        <a  class="btn btn-lg btn-primary" href="{{ route('products.index') }}">Continuer mes achats</a>
                        <a class="btn btn-lg btn-primary" href="#">Commander</a>

                </div>
                @else
                    <span class="card-title center-align">Le panier est vide</span>

        @endif



@endsection
