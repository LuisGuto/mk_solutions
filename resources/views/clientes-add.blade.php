@extends('layouts.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastro Clientes
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label> Codigo </label>
                    <input type="text" class="form-control" id="id" disabled="true">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nomeHelp">
                </div>
            
                <div class="mb-3">
                    <label> CPF/CNPJ </label>
                    <input type="number" class="form-control" id="cpf">
                </div>
                

                <div class="mb-3">
                    <label> CEP </label>
                    <input type="number" class="form-control" id="cep">
                </div>
                
                <div class="mb-3">
                    <label for="name" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidade" aria-describedby="nomeHelp">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="Bairro">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Rua</label>
                    <input type="text" class="form-control" id="Rua">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Numero</label>
                    <input type="number" class="form-control" id="Numero">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Complemento</label>
                    <input type="text" class="form-control" id="Complemento">
                </div>

                <div class="form-group">
                  <label>Telefone residencial</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask='"mask": "(99) 999999999"' data-mask>
                  </div>
                  <!-- /.input group -->
                </div>

                <div class="form-group">
                  <label>Telefone Celular</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask='"mask": "(99) 999999999"' data-mask>
                  </div>
                  <!-- /.input group -->
                </div>

                <div class="mb-3">
                    <label>E-mail</label>
                    <input type="text" class="form-control" id="email">
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/clientes">
                    <button type="button" class="btn btn-default">Voltar</button>
                </a>

            </form>
        </div>
    </div>
@stop
