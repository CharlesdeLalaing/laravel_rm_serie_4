@extends('layout.base')

@section('content')
    <div class="container">
        <a href="/vegetable/create"><button>create vegetable</button></a>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Quantité</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vegetables as $vegetable)
                        <tr>
                            <td>{{ $vegetable->id }}</td>
                            <td class="{{ strlen($vegetable->name) > 5  ? 'bg-primary' : 'bg-none' }}">{{ $vegetable->name }}</td>
                            <td>{{ $vegetable->quantite }}</td>
                            <td><a href="/vegetable/{{$vegetable->id}}/show">show</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
