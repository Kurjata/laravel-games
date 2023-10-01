@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <div class="container mt-5">
        <h1>Área de edição de jogos! :D</h1>
        <hr>
        <form action="{{route('jogos-update', ['id'=>$jogos->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" placeholder="Vamos cadastrar um jogo aqui...">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value="{{ $jogos->categoria }}" placeholder="Hora de definir o gênero do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de Criação:</label>
                    <input type="number" class="form-control" name="ano_criacao" value="{{ $jogos->ano_criacao }}" placeholder="O ano de criação foi...">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" class="form-control" name="valor" value="{{ $jogos->valor }}" placeholder="Esse jogo custa...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-outline-warning" value="Salvar alteração">
                </div>
            </div>
        </form>

    </div>
@endsection