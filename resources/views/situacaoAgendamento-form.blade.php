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

            <form action="/situacaoAgendamento-save/{{$situacaoAgendamento->id}}" method="post">
                @csrf
                <div class="mb-3">
                    <label>ID</label>
                    <input type="text" class="form-control" id="id" name="id" disabled="true" value="{{$situacaoAgendamento->id}}">
                </div>
                <div class="mb-3">
                    <label>Nova</label>
                    <input type="text" class="form-control" id="nova" name="nova" value="{{$situacaoAgendamento->nova}}">
                </div>

                <div class="mb-3">
                    <label>Agendado</label>
                    <input type="text" class="form-control" id="agendado" name="agendado" value="{{$situacaoAgendamento->agendado}}">
                </div>

                <div class="mb-3">
                    <label>Em Andamento</label>
                    <input type="text" class="form-control" id="em_andamento" name="em_andamento" value="{{$situacaoAgendamento->emAndamento}}">
                </div>

                <div class="mb-3">
                    <label>Finalizado</label>
                    <input type="text" class="form-control" id="finalizado" name="finalizado" value="{{$situacaoAgendamento->finalizado}}">
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/situacaoAgendamento">
                  <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>
@stop
