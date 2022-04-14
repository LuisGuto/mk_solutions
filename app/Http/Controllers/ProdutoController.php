<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function lista()
    {

        return view('produtos');
    }

    public function add()
    {

        return view('produtos-add');
    }
}
