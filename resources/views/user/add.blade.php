@extends('layouts.app')

@section('content')
<h1>Add User</h1>
<a href='{!! url('/user/list'); !!}'>Retour</a>
<form method="post" action="{{ route('postUser') }}">
    {{ csrf_field() }}
    <label for="email">Email</label><br>
    <input type="email" name="email"><br>
    <button type="submit">Ajouter</button>
</form>
@endsection
