@extends('layouts.backoffice')

@section('content')
    <h1>Benvenuto nella Dashboard</h1>
    <a href="{{ route('projects.index') }}">Gestione Progetti</a>
@endsection
