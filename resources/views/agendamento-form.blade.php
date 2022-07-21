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

            <form action="/agendamento-save/{{$agendamento->id}}" method="post">
                @csrf
                <div class="mb-3">
                    <label>ID</label>
                    <input type="text" class="form-control" id="id" name="id" disabled="true" value="{{$agendamento->id}}">
                </div>

                <div class="mb-3">
                    <label>id_cliente</label>
                    <input type="text" class="form-control" id="id_cliente" name="id_cliente"  value="{{$agendamento->id_cliente}}">
                </div>

                <div class="mb-3">
                    <label>id_tecnico</label>
                    <input type="text" class="form-control" id="id_tecnico" name="id_tecnico"  value="{{$agendamento->id_tecnico}}">
                </div>

                <div class="mb-3">
                    <label>id_atendentes</label>
                    <input type="text" class="form-control" id="id_atendentes" name="id_atendentes"  value="{{$agendamento->id_atendentes}}">
                </div>

                <div class="mb-3">
                    <label>id_servicos</label>
                    <input type="text" class="form-control" id="id_servicos" name="id_servicos"  value="{{$agendamento->id_servicos}}">
                </div>

                <div class="mb-3">
                    <label>data_hora_prevista</label>
                    <input type="text" class="form-control" id="data_hora_prevista" name="data_hora_prevista" value="{{$agendamento->data_hora_prevista}}">
                </div>

                <div class="mb-3">
                    <label>data_hora_realizada</label>
                    <input type="text" class="form-control" id="data_hora_realizada" name="data_hora_realizada" value="{{$agendamento->data_hora_realizada}}">
                </div>

                <div class="mb-3">
                    <label>status_id</label>
                    <input type="text" class="form-control" id="status_id" name="status_id"  value="{{$agendamento->status_id}}">
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/agendamento">
                  <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>
@stop
