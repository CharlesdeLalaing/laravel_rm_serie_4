@extends('layout.base')

@section('content')
    <div class="container">
        <form action="/administration/element/vegetable/{{$edit->id}}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nom</label>
                <input type="text" value="{{$edit->name}}" class="form-control" name="name" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Quantite</label>
                <input type="number" value="{{$edit->quantite}}" class="form-control" name="quantite" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection