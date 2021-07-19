@extends('layout.base')

@section('content')
    <div class="container">
        <a href="/fruit/create"><button>create fruit</button></a>
        @foreach ($fruits as $fruit)
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Type : {{$fruit->name}}</div>
                <div class="card-body">
                    <h5 class="card-title">Quantite : {{$fruit->quantite}}</h5>
                    <p class="card-text">ID de carte : {{$fruit->id}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
