<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    public function index() {

        return view ('login');
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return view('login', ['erros'=> $validator->errors()]);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        }

        return view('login', ['errors' => ['Usuário e/ou senha inválidos!']]);
    }

    public function logout(Request $request) {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }

}
