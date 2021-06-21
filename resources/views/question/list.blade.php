@extends('layouts.app')

@section('content')
<h1>List Questions</h1>
<ul>
    @foreach ($questions as $question)
        <li>{{ $question->question }}</li>
        <ul>
            @foreach ($question->responses as $response)
            <li>{{ $response->response }}</li>
            @endforeach
        </ul>
    @endforeach
</ul>
<a href='{!! url('/question/add'); !!}'>Ajouter</a>
@endsection