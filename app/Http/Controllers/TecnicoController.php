<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tecnico;

class TecnicoController extends Controller
{
    public function lista() {
        $lista = Tecnico::all();
        return view('tecnico', ['lista' => $lista]);
    }

    public function add() {
        return view('tecnico-add', ['tecnico' => new Tecnico()]);
    }

    public function edit($id) {
        $tecnico = Tecnico::find($id);
        return view('tecnico-add', ['tecnico' => $tecnico]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = Tecnico::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = Tecnico::find($id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('tecnico-form', ['erro' => true]);
    }

    public function delete($id) {
        $excluiu = Tecnico::find($id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('tecnico', ['erro' => true]);
    }




}