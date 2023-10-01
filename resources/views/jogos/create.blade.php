@extends('layouts.app')

@section('title', 'Games')

@section('content')
    <div class="container mt-5">
        <h1>Área de cadastro de jogos! :)</h1>
        <hr>
        <form action="{{route('jogos-store')}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Vamos cadastrar um jogo aqui...">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" placeholder="Hora de definir o gênero do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de Criação:</label>
                    <input type="number" class="form-control" name="ano_criacao" placeholder="O ano de criação foi...">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" class="form-control" name="valor" placeholder="Esse jogo custa...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-outline-light">
                </div>
            </div>
        </form>

    </div>
@endsection