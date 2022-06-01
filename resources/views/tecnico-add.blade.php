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

            <form action="/tecnico-save/{{$tecnico->id}}" method="post">
                @csrf
                <div class="mb-3">
                    <label>ID</label>
                    <input type="text" class="form-control" id="id" name="id" disabled="true" value="{{$tecnico->id}}">
                </div>
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{$tecnico->nome}}">
                </div>
                <div class="mb-3">
                    <label>Equipe</label>
                    <input type="text" class="form-control" id="equipe" name="equipe" value="{{$tecnico->equipe}}">
                </div>
                <div class="mb-3">
                    <label>cargo</label>
                    <input type="text" class="form-control" id="cargo" name="cargo" value="{{$tecnico->cargo}}">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/tecnico">
                  <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>
@stop
