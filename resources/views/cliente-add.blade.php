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

            <form action="/cliente-save/{{$cliente->id}}" method="post">
                @csrf
                <div class="mb-3">
                    <label>ID</label>
                    <input type="text" class="form-control" id="id" name="id" disabled="true" value="{{$cliente->id}}">
                </div>
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required="true" value="{{$cliente->nome}}">
                </div>
                <div class="mb-3">
                    <label>Cpf</label>
                    <input type="text" class="form-control" id="cpf" name="cpf"  value="{{$cliente->cpf}}">
                </div>
                <div class="mb-3">
                    <label>Endereco</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value="{{$cliente->endereco}}">
                </div>
                <div class="mb-3">
                    <label>Contato</label>
                    <input type="text" class="form-control" id="contato" name="contato" value="{{$cliente->contato}}">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/cliente">
                  <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>
@stop
