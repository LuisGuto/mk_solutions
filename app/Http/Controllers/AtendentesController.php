<?php

namespace App\Http\Controllers;

use App\Models\Atendentes;
use Illuminate\Http\Request;

class AtendentesController extends Controller
{

    public function lista() {
        $lista = Atendentes::all();
        return view('atendentes', ['lista' => $lista]);
    }

    public function add() {
        return view('atendentes-form', ['atendentes' => new Atendentes()]);
    }

    public function edit($id) {
        $atendentes = Atendentes::find($id);
        return view('atendentes-form', ['atendentes' => $atendentes]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = Atendentes::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = Atendentes::find($id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('atendentes-form', ['erro' => true]);
    }

    public function delete($id) {
        $excluiu = Atendentes::find($id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('atendentes', ['erro' => true]);
    }
}
