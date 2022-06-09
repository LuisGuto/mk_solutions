@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Serviços</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (isset($erro))
                <div class="alert alert-danger" role="alert">
                    Ocorreram problemas ao tentar salvar o registro!
                </div>
            @endif

            <form action="/servicos-save/{{$servicos->id}}" method="post">
                @csrf
                <div class="mb-3">
                    <label>ID</label>
                    <input type="text" class="form-control" id="id" name="id" disabled="true" value="{{$servicos->id}}">
                </div>
                <div class="mb-3">
                    <label>Descrição dos serviços</label>
                    <input type="text" class="form-control" id="descricao_servicos" name="descricao_servicos" value="{{$servicos->descricao_servicos}}">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ativo</label>
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/servicos">
                  <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>
@stop
