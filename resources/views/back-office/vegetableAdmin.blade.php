@extends('back-office.layout.base')

@section('content')
    <div class="container">
        <a href="/administration/element/vegetable/create"><button>create element</button></a>
        <h1>Vegetable List</h1>
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
                    @forelse ($vegetables as $vegetable)
                        <tr  class="{{ strlen($vegetable->name) > 5 ? 'bg-primary' : 'bg-none' }}">
                            <td>{{ $vegetable->id }}</td>
                            <td>
                                {{ $vegetable->name }}
                            </td>
                            <td>{{ $vegetable->quantite }}</td>
                            <td><a href="/administration/element/vegetable/{{ $vegetable->id }}/show"><button>show</button></a></td>
                        </tr>
                    @empty
                        <p class="bg-danger text-white p-1">no product</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
