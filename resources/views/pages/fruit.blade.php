@extends('layout.base')

@section('content')
    <div class="container">
        <a href="/fruit/create"><button>create fruit</button></a>
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
                    @foreach ($fruits as $fruit)
                        <tr>
                            <td>{{ $fruit->id }}</td>
                            <td class="{{ strlen($fruit->name) > 5  ? 'bg-primary' : 'bg-none' }}">{{ $fruit->name }}</td>
                            <td>{{ $fruit->quantite }}</td>
                            <td><a href="/fruit/{{$fruit->id}}/show">show</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
