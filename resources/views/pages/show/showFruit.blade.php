@extends('layout.base')

@section('content')
    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">NOM: {{$show->name}}</h5>
                <p class="card-text">QUANTITE: {{$show->quantite}}</p>
                <a href="{{route('fruit')}}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
