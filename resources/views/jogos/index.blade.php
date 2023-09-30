@extends('layouts.app')

@section('title', 'Games')

@section('content')
    <h1>Lista de Jogos</h1>

    <table class="table">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
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
                <th>R$ {{ $jogo->valor }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection