@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row card">
            <div class="col-4">
                <figure>
                    <img src="{{ $product->image }}" alt="">
                </figure>
            </div>
            <div class="col-8">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <div>{{ $product->price }}</div>
            </div>
        </div>
        <div class="home-button d-flex justify-content-end">
            <a class="btn btn-primary" href="{{ route('products.index') }}">Home</a>
        </div>
    </div>
@endsection
