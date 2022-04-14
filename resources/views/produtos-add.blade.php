@extends('layouts.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastro Produto
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label> ID </label>
                    <input type="text" class="form-control" id="id" disabled="true">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Descriçao</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nomeHelp">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Codigo Interno</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nomeHelp">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nomeHelp">
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/produto">
                    <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>
@stop
