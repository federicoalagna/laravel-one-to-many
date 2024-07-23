@extends('layouts.backoffice')

@section('content')
    <h1>Modifica Progetto</h1>
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Titolo:</label>
            <input type="text" id="title" name="title" value="{{ $project->title }}" required>
        </div>
        <div>
            <label for="description">Descrizione:</label>
            <textarea id="description" name="description" required>{{ $project->description }}</textarea>
        </div>
        <button type="submit">Aggiorna</button>
    </form>
@endsection
