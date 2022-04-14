<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function lista() {

        return view ('clientes');
    }

    public function add() {

        return view ('clientes-add');
    }
}
