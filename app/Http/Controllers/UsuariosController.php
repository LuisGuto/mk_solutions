<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function lista() {

        return view ('usuarios');
    }

    public function add() {

        return view ('usuarios-add');
    }
}
