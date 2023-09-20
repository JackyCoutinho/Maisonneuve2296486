@extends('layouts.app')
@section('title', 'Modifier une ville')
@section('content')

    <h1 class="mb-4">Modifier une Ville</h1>
    <form method="post" action="{{route('ville.update', ['ville' => $ville])}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" lass="form-control" id="nom" name="nom" placeholder="Nom de la ville" value="{{$ville->nom}}">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Envoyer">
        </div>
    </form>

@endsection
