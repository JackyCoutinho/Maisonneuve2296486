@extends('layouts.app')
@section('title', 'Détails dun étudiant')
@section('content')

<h1>Détails d'un étudiant</h1>
<div class="mb-3">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Date de Naissance</th>
                <th>Ville Id</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$etudiant->id}}</td>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->adresse}}</td>
                <td>{{$etudiant->phone}}</td>
                <td>{{$etudiant->email}}</td>
                <td>{{$etudiant->datedenaissance}}</td>
                <td>{{$etudiant->ville_id}}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('etudiant.edit', ['etudiant' => $etudiant])}}">Modifier</a>
                </td>
                <td>
                    <form method="post" action="{{route('etudiant.destroy', ['etudiant' => $etudiant])}}">
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