@extends('layouts.main')
@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('products.update', $product->id)}}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{old('name',$product->name)}}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Price" step="0.01" value="{{old('price',$product->price)}}">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Image Link" value="{{old('image',$product->image)}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description"  name="description" rows="5">{{old('description',$product->description)}}</textarea>
    </div>
     
    <button class="btn btn-success" type="submit">ESEGU</button>
</form>
@endsection