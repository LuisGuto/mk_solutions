@extends('layouts.layout', ['title' => 'Atendentes'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de situacao Agendamento</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (isset($erro))
                <div class="alert alert-danger" role="alert">
                    Ocorreram problemas ao tentar excluir o registro!
                </div>
            @endif

            @if (isset($salvou))
                <div class="alert alert-success" role="alert">
                    Registro salvo com sucesso!
                </div>
            @endif

            <a href="/situacaoAgendamento-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Novo</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>ID</th>
                        <th>Nova</th>
                        <th>Agendado</th>
                        <th>Em Andamento</th>
                        <th>Finalizado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $situacaoAgendamento)
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="/situacaoAgendamento-edit/{{$situacaoAgendamento->id}}">Editar</a>
                                <a class="btn btn-danger" href="/situacaoAgendamento-delete/{{$situacaoAgendamento->id}}">Excluir</a>
                            </td>
                            <td>{{$situacaoAgendamento->id}}</td>
                            <td>{{$situacaoAgendamento->nova}}</td>
                            <td>{{$situacaoAgendamento->agendado}}</td>
                            <td>{{$situacaoAgendamento->emAndamento}}</td>
                            <td>{{$situacaoAgendamento->finalizado}}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop
