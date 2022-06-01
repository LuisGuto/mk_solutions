@extends('layouts.layout', ['title' => 'Tecnico'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de tecnicos</h3>
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

            <a href="/tecnico-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Nova</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Equipe</th>
                        <th>Cargo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $tecnico)
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="/tecnico-edit/{{$tecnico->id}}">Editar</a>
                                <a class="btn btn-danger" href="/tecnico-delete/{{$tecnico->id}}">Excluir</a>
                            </td>
                            <td>{{$tecnico->id}}</td>
                            <td>{{$tecnico->nome}}</td>
                            <td>{{$tecnico->equipe}}</td>
                            <td>{{$tecnico->cargo}}</td>                         
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop
