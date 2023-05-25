@extends('base')

@section('content')
    <section>
        @if(Auth::check())
            <div class="pull-right text-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="text-center">
            <div class="row">
                @foreach ($products as $product)

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card" id="product-{{ $product->id }}">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                 data-mdb-ripple-color="light">
                                <a  href="{{ route('products.show',$product->id) }}">
                                    <img src="{{ asset('images/'.$product->img) }}"
                                         class="w-100" />
                                </a>
                                <a href="#!">
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100">
                                            <h5><span class="badge bg-dark ms-2">NEW</span></h5>
                                        </div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset">
                                    <h5 class="card-title mb-2">{{ $product->name }}</h5>
                                </a>
                                <a href="" class="text-reset ">
                                    <p>Shirt</p>
                                </a>
                                <h6 class="mb-3 price">{{ $product->price }}€</h6>
                            </div>
                        </div>
                    </div>
                    @if(Auth::check())

                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif

                @endforeach

            </div>

        </div>
        <div class="pagination justify-content-center">
            {{ $products->links()}}
        </div>

    </section>


@endsection
