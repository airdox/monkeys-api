@extends('layouts.app')

@section('content')
<h1>Liste des questions</h1>
@foreach ($questions as $question)
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">{{ $question->question }}</th>
        </tr>
    </thead>
    @foreach ($question->responses as $response)
        <tr scope="row">
            <td scope="col">{{ $response->response }}</td></tr>
    @endforeach
</table>
@endforeach
<button class="btn btn-success add-button"  onclick="window.location.href='{!! url('/question/add'); !!}'">Ajouter</button>

@endsection