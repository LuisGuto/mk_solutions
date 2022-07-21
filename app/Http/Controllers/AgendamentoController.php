<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{

    public function lista() {
        $lista = Agendamento::all();
        return view('agendamento', ['lista' => $lista]);
    }

    public function add() {
        return view('agendamento-form', ['agendamento' => new Agendamento()]);
    }

    public function edit($id) {
        $agendamento = Agendamento::find($id);
        return view('agendamento-form', ['agendamento' => $Agendamento]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = Agendamento::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = Agendamento::find($id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('agendamento-form', ['erro' => true]);
    }

    public function delete($id) {
        $excluiu = Agendamento::find($id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('agendamento', ['erro' => true]);
    }
}