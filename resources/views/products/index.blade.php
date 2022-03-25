@extends('layouts.main')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
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
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="delete-product">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger">Elimina</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add a product</a>
@endsection

@section('additional_scripts')
    <script>
        const deleteProduct = document.querySelector('.delete-product')
        deleteProduct.forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const content = confirm('Sei sicuro di eliminare questo prodotto?')
                if (content) e.target.submit();
            })
        })
    </script>
@endsection
