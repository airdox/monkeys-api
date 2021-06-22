@extends('layouts.app')

@section('content')
<button class="btn btn-secondary return-button"  onclick="window.location.href='{!! url('/user/list'); !!}'">Retour</button>
<h1>Ajout d'utilisateur</h1>
<form method="post" action="{{ route('postUser') }}">
    {{ csrf_field() }}
    <div class="input-group input-group-lg">
        <div class="input-group-prepend">
            <span class="input-group-text" for="email">Email</span>
        </div>
        <input type="text" class="form-control" aria-label="Large" name="email">
    </div>
    <button class="btn btn-success" type="submit">Ajouter</button>
</form>
@endsection
