@extends('layouts.app')

@section('content')
<h1>List Users</h1>
<ul>
    @foreach ($users as $user)
    <li>{{ $user->email }}</li>
    @endforeach
</ul>
<a href='{!! url('/user/add'); !!}'>Ajouter</a>
@endsection