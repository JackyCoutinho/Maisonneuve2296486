@extends('layouts.app')
@section('title', 'Détail de la ville')
@section('content')

    <h1>Détails d'une Ville</h1>
    <div>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$ville->id}}</td>
                    <td>{{$ville->nom}}</td>
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
        </table>
    </div>

@endsection
