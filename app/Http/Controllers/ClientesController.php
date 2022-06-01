<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function lista() {
        $lista = Cliente::all();
        return view('clientes', ['lista' => $lista]);
    }

    public function add() {
        return view('clientes-add', ['cliente' => new Cliente()]);
    }

    public function edit($id) {
        $cliente = Cliente::find($id);
        return view('clientes-add', ['cliente' => $cliente]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = Cliente::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = Cliente::where('id', $id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('cliente-form', ['erro' => true]);
    }

    public function delete($id) {
        $excluiu = Cliente::where('id', $id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('cliente', ['erro' => true]);
    }




}
