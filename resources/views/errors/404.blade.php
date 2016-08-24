@extends('layout')

@section('title')
    {{ isset($title) && !empty($title) ? ($title . ' |') : '' }} Cobranças
@endsection

@section('content')
    <h1>Erro 404 - Página não encontrada</h1>
    <hr />

    <a href="{{ route('titulos.index') }}" class="btn btn-primary">
        Voltar à página inicial
    </a>
@endsection