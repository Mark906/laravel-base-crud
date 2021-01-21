@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4 mb-4">Dettaglio prodotto: {{ $product->id }}</h1>
            <ul class="list-group">
                <li class="list-group-item">Nome:{{ $product->name }}</li>
                <li class="list-group-item">Taglia:{{ $product->size }}</li>
                <li class="list-group-item">Prezzo:{{ $product->price }}</li>
                <li class="list-group-item">Descrizione:{{ $product->description }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection
