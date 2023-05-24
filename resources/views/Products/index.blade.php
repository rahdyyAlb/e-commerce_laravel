@extends('base')

@section('content')
    <section class="section-products">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="header">
                        <h2>Products</h2>
                    </div>
                </div>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="row mt-4">
                @foreach ($products as $product)
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div id="product-1" class="single-product">
                                <div class="part-2">
                                    <h3 class="product-title">{{ $product->name }}</h3>
                                    <a href="{{ route('products.show',$product->id) }}">
                                        <img src="{{ asset('images/'.$product->img) }}" alt="img">
                                    </a>
                                    <h5 class="product-price">{{ $product->price }} €</h5>
                                </div>
                            </div>
                        </div>


                        @if(Auth::check())
                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endif
                </form>
                    <div class="col-md-4">
                        <div id="product-{{ $product->id }}" class="single-product">
                            <div class="part-2 col d-flex align-items-center flex-column">
                                <h3 class="product-title">{{ $product->name }}</h3>
                                <img src="{{ asset('images/'.$product->img) }}" alt="img">
                                <h5 class="product-price">{{ $product->price }}</h5>
                                <div>
                                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="pagination justify-content-center">
            {{ $products->links()}}
        </div>

    </section>
@endsection
