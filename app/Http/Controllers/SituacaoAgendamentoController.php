<?php

namespace App\Http\Controllers;

use App\Models\SituacaoAgendamento;
use Illuminate\Http\Request;

class SituacaoAgendamentoController extends Controller
{

    public function lista() {
        $lista = SituacaoAgendamento::all();
        return view('situacaoAgendamento', ['lista' => $lista]);
    }

    public function add() {
        return view('situacaoAgendamento-form', ['situacaoAgendamento' => new SituacaoAgendamento()]);
    }

    public function edit($id) {
        $situacaoAgendamento = SituacaoAgendamento::find($id);
        return view('situacaoAgendamento-form', ['situacaoAgendamento' => $situacaoAgendamento]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = SituacaoAgendamento::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = SituacaoAgendamento::find($id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('situacaoAgendamento-form', ['erro' => true]);
    }

    public function delete($id) {
        $excluiu = SituacaoAgendamento::find($id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('situacaoAgendamento', ['erro' => true]);
    }
}
