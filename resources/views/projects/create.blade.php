@extends('layouts.backoffice')

@section('content')
    <h1>Crea Nuovo Progetto</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titolo:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="description">Descrizione:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <button type="submit">Crea</button>
    </form>
@endsection
