@extends('layouts.layout')
@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Lista De Produtos</h3>
    </div>
    <!-- /.card-header -->

<div class="card-body">
    <a href="/produtos-add">

    <button type="button" class="btn btn-block btn-outline-primary mb-3">Novo Produto</button>

    </a>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Ações</th>
        <th>Código</th>
        <th>Descrição</th>
        <th>Código interno</th>
        <th>Categoria</th>

      </tr>
      </thead>
      <tbody>
      <tr>
        <td></td>
        <td>1</td>
        <td>material fragil</td>
        <td>0587</td>
        <td>vidro</td>
      </tr>
      <tr>
        <td></td>
        <td>2</td>
        <td>material fragil</td>
        <td>0887</td>
        <td>jogo</td>
      </tr>
      <tr>
        <td></td>
        <td>3</td>
        <td>material fragil</td>
        <td>0287</td>
        <td>celular</td>
      </tr>
      <tr>
        <td></td>
        <td>4</td>
        <td>frios</td>
        <td>0687</td>
        <td>presunto</td>
      </tr>
      <tr>
        <td></td>
        <td>5</td>
        <td>frios</td>
        <td>0487</td>
        <td>queijo</td>
      </tr>
      <tr>
        <td></td>
        <td>6</td>
        <td>madeira</td>
        <td>1587</td>
        <td>cadeira</td>
      </tr>
      <tr>
        <td></td>
        <td>7</td>
        <td>material fragil</td>
        <td>0687</td>
        <td>copos</td>
      </tr>
      <tr>
        <td></td>
        <td>8</td>
        <td>liquido</td>
        <td>0187</td>
        <td>agua</td>
      </tr>
      <tr>
        <td></td>
        <td>9</td>
        <td>material fragil</td>
        <td>0587</td>
        <td>vidro</td>
      </tr>
      <tr>
        <td></td>
        <td>10</td>
        <td>material fragil</td>
        <td>0587</td>
        <td>vidro</td>
      </tr>
      <tr>
        <td></td>
        <td>11</td>
        <td>material fragil</td>
        <td>0587</td>
        <td>vidro</td>
      </tr>

  </table>

@stop
