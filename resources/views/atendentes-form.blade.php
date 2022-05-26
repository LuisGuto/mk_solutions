@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastro</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (isset($erro))
                <div class="alert alert-danger" role="alert">
                    Ocorreram problemas ao tentar salvar o registro!
                </div>
            @endif

            <form action="/atendentes-save/{{$atendentes->id}}" method="post">
                @csrf
                <div class="mb-3">
                    <label>ID</label>
                    <input type="text" class="form-control" id="id" name="id" disabled="true" value="{{$atendentes->id}}">
                </div>
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{$atendentes->nome}}">
                </div>

                <div class="mb-3">
                    <label>Função</label>
                    <input type="text" class="form-control" id="funcao" name="funcao" value="{{$atendentes->funcao}}">
                </div>

                <div class="mb-3">
                    <label>Setor</label>
                    <input type="text" class="form-control" id="setor" name="setor" value="{{$atendentes->setor}}">
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/atendentes">
                  <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>
@stop
