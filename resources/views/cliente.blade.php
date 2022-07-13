@extends('layouts.layout', ['title' => 'Cliente'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de cliente</h3>
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

            <a href="/cliente-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Nova</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cpf</th>
                        <th>Endereco</th>
                        <th>Contato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $cliente)
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="/cliente-edit/{{$cliente->id}}">Editar</a>
                                <a class="btn btn-danger" href="/cliente-delete/{{$cliente->id}}">Excluir</a>
                            </td>
                            <td>{{$cliente->id}}</td>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->cfp}}</td>
                            <td>{{$cliente->endereco}}</td>
                            <td>{{$cliente->contato}}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop
