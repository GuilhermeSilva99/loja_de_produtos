<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function entrar(Request $request)
    {
        $dados = $request->all();
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
            return redirect()->route('produtos.index');
        }
        return redirect()->route('login');
    }
    public function sair()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
