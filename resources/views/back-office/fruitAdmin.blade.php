@extends('back-office.layout.base')

@section('content')
    <div class="container">
        <a href="/administration/element/fruit/create"><button>create element</button></a>
        <h1>Fruit List</h1>
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
                    @forelse ($fruits as $fruit)
                        <tr  class="{{ strlen($fruit->name) > 5 ? 'bg-primary' : 'bg-none' }}">
                            <td>{{ $fruit->id }}</td>
                            <td>{{ $fruit->name }}
                            </td>
                            <td>{{ $fruit->quantite }}</td>
                            <td><a href="/administration/element/fruit/{{ $fruit->id }}/show"><button>show</button></a></td>
                        </tr>
                    @empty
                        <p class="bg-danger text-white p-1">no product</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
