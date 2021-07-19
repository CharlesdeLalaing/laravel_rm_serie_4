@extends('layout.base')

@section('content')
    <div class="container">
        <a href="/vegetable/create"><button>create vegetable</button></a>
        @foreach ($vegetables as $vegetable)
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Type : {{ $vegetable->name }}</div>
                <div class="card-body">
                    <h5 class="card-title">Quantite : {{ $vegetable->quantite }}</h5>
                    <p class="card-text">ID de carte : {{ $vegetable->id }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
