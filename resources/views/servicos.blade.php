@extends('layouts.layout', ['title' => 'Servicos'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de serviços</h3>
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

            <a href="/servicos-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Novo</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>ID</th>
                        <th>Descrição do serviço</th>
                        <th>Ativo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $servicos)
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="/servicos-edit/{{$servicos->id}}">Editar</a>
                                <a class="btn btn-danger" href="/servicos-delete/{{$servicos->id}}">Excluir</a>
                            </td>
                            <td>{{$servicos->id}}</td>
                            <td>{{$servicos->descricao_servicos}}</td>
                            <td>{{$servicos->ativo}}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop
