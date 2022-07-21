<?php

namespace App\Http\Controllers;

use App\Models\Servicos;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function lista() {
        $lista = Servicos::all();
        return view('servicos', ['lista' => $lista]);
    }

    public function add() {
        return view('servicos-form', ['servicos' => new Servicos()]);
    }

    public function edit($id) {
        $servicos = Servicos::find($id);
        return view('servicos-form', ['servicos' => $servicos]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = Servicos::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = Servicos::find($id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('servicos-form', ['erro' => true]);
    }

    public function delete($id) {
        $excluiu = Servicos::find($id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('servicos', ['erro' => true]);
    }
}
