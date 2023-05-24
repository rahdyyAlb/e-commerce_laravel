@extends('base')

@section('content')
    <div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-center">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right text-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <img src="{{ asset('images/'.$product->img) }}"   width="500px" alt="img">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ $product->name }}</strong>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
            <div class="form-group">
                <strong>Details:</strong>
                <p>{{ $product->detail }}</p>
            </div>
        </div>
        <div>
            <strong>Prix : {{$product->price}}</strong>
        </div>

    </div>
    </div>
@endsection
