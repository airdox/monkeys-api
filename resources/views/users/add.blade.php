@extends('layouts.app')

@section('content')
<h1>Add User</h1>
<form method="post" action="{{ route('postData') }}">
    {{ csrf_field() }}
    <label for="email">Email</label><br>
    <input type="email" name="email"><br>
    <button type="submit">Ajouter</button>
</form>
@endsection
