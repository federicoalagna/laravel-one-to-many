@extends('layouts.backoffice')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <a href="{{ route('projects.index') }}">Torna alla lista dei progetti</a>
@endsection
