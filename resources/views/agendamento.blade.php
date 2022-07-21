@extends('layouts.layout', ['title' => 'Atendentes'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de agendamento</h3>
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

            <a href="/agendamento-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Novo</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>ID</th>
                        <th>id_cliente</th>
                        <th>id_tecnico</th>
                        <th>id_atendentes</th>
                        <th>id_servicos</th>
                        <th>data_hora_prevista</th>
                        <th>data_hora_realizada</th>
                        <th>status_id</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $agendamento)
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="/agendamento-edit/{{$agendamento->id}}">Editar</a>
                                <a class="btn btn-danger" href="/agendamento-delete/{{$agendamento->id}}">Excluir</a>
                            </td>
                            <td>{{$agendamento->id}}</td>
                            <td>{{$agendamento->id_cliente}}</td>
                            <td>{{$agendamento->id_tecnico}}</td>
                            <td>{{$agendamento->id_atendentes}}</td>
                            <td>{{$agendamento->id_servicos}}</td>
                            <td>{{$agendamento->data_hora_prevista}}</td>
                            <td>{{$agendamento->data_hora_realizada}}</td>
                            <td>{{$agendamento->status_id}}</td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop
