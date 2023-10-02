@extends('layouts.app')

@section('title', 'Games')

@section('content')
    <div class="container mt-5">

    <div class="neon-clock">
        <span id="hours"></span>:<span id="minutes"></span>:<span id="seconds"></span>
    </div>

        <div class="row">
            <div class="col-sm-10">
                <h1>Lista de Jogos</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{route('jogos-create')}}" class="btn btn-outline-light">Cadastrar jogo</a>

            </div>
        </div>

        <hr>
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Ano de Criação</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Editar Game</th>
                </tr>
            </thead>
            <tbody id="body">

            </tbody>
            
        </table>
    </div>

@endsection

<script src="{{ asset('js/main.js')}}">

</script>
