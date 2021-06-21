@extends('layouts.app')

@section('content')
<h1>Add Question</h1>
<a class="nav-link" href='{!! url('/question/list'); !!}'>Retour</a>
<form method="post" action="{{ route('postQuestion') }}">
    {{ csrf_field() }}
    <label for="question">Question</label><br>
    <input type="text" name="question"><br>
    <label for="response1">Réponse 1</label><br>
    <input type="text" name="response1"><br>
    <label for="response2">Réponse 2</label><br>
    <input type="text" name="response2"><br>
    <label for="response3">Réponse 3</label><br>
    <input type="text" name="response3"><br>
    <label for="response4">Réponse 4</label><br>
    <input type="text" name="response4"><br>
    <button type="submit">Ajouter</button>
</form>
@endsection
