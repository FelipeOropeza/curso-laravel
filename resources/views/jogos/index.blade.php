@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
<h1>Listagem de Jogos</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ano de Criação</th>
            <th scope="col">Valor</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jogos as $jogo)
        <tr>
            <th>{{ $jogo->id }}</th>
            <th>{{ $jogo->nome }}</th>
            <th>{{ $jogo->categoria }}</th>
            <th>{{ $jogo->ano_criacao }}</th>
            <th>{{ $jogo->valor }}</th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection