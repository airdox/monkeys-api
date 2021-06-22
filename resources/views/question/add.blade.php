@extends('layouts.app')

@section('content')
<button class="btn btn-secondary return-button"  onclick="window.location.href='{!! url('/question/list'); !!}'">Retour</button>
<h1>Ajout de question</h1>
<form class="form-custom" method="post" action="{{ route('postQuestion') }}">
    {{ csrf_field() }}
    <div class="input-group input-group-lg">
        <div class="input-group-prepend">
            <span class="input-group-text" for="question">Question</span>
        </div>
        <input type="text" class="form-control" aria-label="Large" name="question">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" for="response1">Réponse 1</span>
        </div>
        <input type="text" class="form-control" aria-label="Default" name="response1">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" for="response2">Réponse 2</span>
        </div>
        <input type="text" class="form-control" aria-label="Default" name="response2">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" for="response3">Réponse 3</span>
        </div>
        <input type="text" class="form-control" aria-label="Default" name="response3">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" for="response4">Réponse 4</span>
        </div>
        <input type="text" class="form-control" aria-label="Default" name="response4">
    </div>
    <button class="btn btn-success" type="submit">Ajouter</button>
</form>
@endsection
