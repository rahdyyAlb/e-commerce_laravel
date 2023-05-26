@extends('base')

@section('content')
    <section class="product">
        @if($total)

        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Edite</th>
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
                            {{ $item->name }}
                        </th>
                        <td>{{ number_format($item->quantity * $item->price, 2, ',', ' ') }} €</td>
                        <td>
                            <input name="quantity" type="number" style="height: 2rem" min="1" value="{{ $item->quantity }}">
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger">add</button>

                        </td>
                    </form>
                    <td>
                        <form action="{{ route('card.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                    </td>
                </tr>
            @endforeach
            @else
                <span class="card-title center-align">Le panier est vide</span>

            @endif
            </tbody>
        </table>
            <div id="action" class="card-action">
                <p>
                    <a  href="{{ route('products.index') }}">Continuer mes achats</a>
                    @if($total)
                        <a href="#">Commander</a>
                    @endif
                </p>
            </div>

    </section>

@endsection
