@extends('layouts.layout', ['title' => 'Atendentes'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de atendentes</h3>
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

            <a href="/atendentes-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Novo</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Função</th>
                        <th>Setor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $atendentes)
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="/atendentes-edit/{{$atendentes->id}}">Editar</a>
                                <a class="btn btn-danger" href="/atendentes-delete/{{$atendentes->id}}">Excluir</a>
                            </td>
                            <td>{{$atendentes->id}}</td>
                            <td>{{$atendentes->nome}}</td>
                            <td>{{$atendentes->funcao}}</td>
                            <td>{{$atendentes->setor}}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop
