@extends('layouts.app')
@section('title', 'Ajouter une ville')
@section('content')

<h1 class="mb-4">Ajouter une Ville</h1>
<form method="post" action="{{route('ville.store')}}">
    @csrf
    @method('post')
    <div class="mb-3">
        <label for="nom" id="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" placeholder="Nom de la ville">
    </div>
    <div>
        <input type="submit" class="btn btn-primary" value="Envoyer">
    </div>
</form>

@endsection