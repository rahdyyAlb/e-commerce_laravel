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
            <div class="row">
                <!-- Single ProductsController -->
                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-1" class="single-product">
                            <div class="part-2">
                                <h3 class="product-title">{{ $product->name }}</h3>
                                <img src="{{ asset($product->img) }}" alt="img">
                                <h5 class="product-price">{{ $product->price }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
