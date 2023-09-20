@extends('layouts.app')
@section('title', 'Ajouter un étudiant')
@section('content')

<h1>Ajouter un étudiant</h1>
<form class="row g-3" method="post" action="{{route('etudiant.store')}}">
    @csrf
    @method('post')
    <div>
        <label for="nom" id="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" placeholder="Nom">
    </div>
    <div>
        <label for="adresse" id="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" name="adresse" placeholder="Adresse">
    </div>
    <div class="col-md-6">
        <label for="phone" id="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="Phone">
    </div>
    <div class="col-md-6">
        <label for="email" id="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="col-md-6">
        <label for="datedenaissance" id="datedenaissance" class="form-label">Date de Naissance</label>
        <input type="text" class="form-control" name="datedenaissance" placeholder="Date de Naissance">
    </div>
    <div class="col-md-6">
        <label for="ville_id" id="ville_id" class="form-label">Ville</label>
        <select id="ville_id" name="ville_id" class="form-select">
            @foreach($villes as $ville)
            <option value="{{$ville->id}}">{{$ville->nom}}</option>
            @endforeach
        </select>
        <!-- <input type="text" class="form-control"name="ville_id" placeholder="Ville"> -->
    </div>
    <div>
        <input type="submit" class="btn btn-primary" value="Envoyer">
    </div>
</form>

@endsection