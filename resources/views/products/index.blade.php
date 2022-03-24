@extends('layouts.main')

@section('content')
    <ul class="d-flex flex-wrap flex-row">
        @foreach ($products as $product)
            <li class="col-4">
                <figure>
                    <img src="{{ $product->image }}" alt="">
                </figure>
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <div>{{ $product->price }}</div>
                <a href="{{ route('products.show', ['product' => $product->id]) }}">Dettagli</a>
                <a href="{{ route('products.edit', ['product' => $product->id]) }}">Modifica</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add a product</a>
@endsection
