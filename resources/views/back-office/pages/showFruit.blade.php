@extends('layout.base')

@section('content')
    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">NOM: {{$show->name}}</h5>
                <p class="card-text">QUANTITE: {{$show->quantite}}</p>
                <a href="{{ URL::previous() }}" class="btn btn-primary">Back to List</a>
                <a class="btn btn-success text-white mb-3" href="/administration/element/fruit/{{$show->id}}/edit">EDIT</a>
                <form action="/administration/element/fruit/{{$show->id}}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger text-white" type="submit">DELETE</button>
                </form>
            </div>
        </div>
    </div>
@endsection
