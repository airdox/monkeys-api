@extends('layouts.app')

@section('content')
<h1>Liste des utilisateurs</h1>
<table class="table table-hover">
    @foreach ($users as $user)
    <tr scope="row">
        <td scope="col">{{ $user->email }}</td>
        <td scope="col"><button class="btn btn-warning">Éditer</button></td>
        <td scope="col"><button class="btn btn-danger">Supprimer</button></td>
    </tr>
    @endforeach
</table>
<button class="btn btn-success add-button"  onclick="window.location.href='{!! url('/user/add'); !!}'">Ajouter</button>
@endsection