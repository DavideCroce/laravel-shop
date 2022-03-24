@extends('layouts.main')

@section('content')
    <form action="{{route('products.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Price">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Image Link">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description"  name="description" rows="5"></textarea>
        </div>
         
        <button class="btn btn-success" type="submit">ESEGUI</button>
    </form>
@endsection