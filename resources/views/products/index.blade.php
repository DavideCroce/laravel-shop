@extends('layouts.main')

@section('content')
<<<<<<< HEAD
    <ul>
        @foreach ($products as $product)
            <li>
                <figure>
                    <img src="{{ $product->image }}" alt="">
                </figure>
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <div>{{ $product->price }}</div>
                <a href="{{ route('products.show', ['product' => $product->id]) }}">Dettagli</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('products.create') }}" class="btn btn-primary"> Add a new product!</a>
@endsection
=======
<ul>
    @foreach ($products as $product)
    <li>
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
@endsection
>>>>>>> 0933855ba5836aa17f64421d8ad623a42aefc41a
