@extends('base')

@section('content')

    <table class="table">
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
    @foreach ($products as $product)
        <tr>
        <th scope="row">
            <img style="width: 40px" class="admin-img" src="{{ asset('images/'.$product->img) }} ">

        </th>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>
            <a class="btn btn-primary " href="{{ route('products.edit',$product->id) }}">Edit</a>
        </td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
