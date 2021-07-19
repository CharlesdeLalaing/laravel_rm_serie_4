@extends('back-office.layout.base')

@section('content')
    <div class="container">
        <a href="/administration/element/create"><button>create element</button></a>
        <h1>Vegetable List</h1>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Quantité</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vegetables as $vegetable)
                        <tr>
                            <td>{{ $vegetable->id }}</td>
                            <td class="{{ strlen($vegetable->name) > 5 ? 'bg-primary' : 'bg-none' }}">{{ $vegetable->name }}
                            </td>
                            <td>{{ $vegetable->quantite }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
