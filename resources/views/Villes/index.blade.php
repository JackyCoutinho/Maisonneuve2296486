@extends('layouts.app')
@section('title', 'Liste de villes')
@section('content')

    <h1>Liste des Villes</h1>
    <div class="mb-3 mt-3">
        <a href="/ville/create">Ajouter une ville</a>
    </div>
    <div>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Afficher</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            @foreach($villes as $ville)
                <tbody>
                    <tr>
                        <td>{{$ville->id}}</td>
                        <td>{{$ville->nom}}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('ville.show', ['ville' => $ville])}}">Afficher</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{route('ville.edit', ['ville' => $ville])}}">Modifier</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('ville.destroy', ['ville' => $ville])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Supprimer" />
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection
