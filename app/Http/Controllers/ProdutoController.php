<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('layout.index', ['produtos' => $produtos]);
    }

    public function adicionar(){
        return view('layout.adicionar');
    }

    public function salvar(Request $request){
        $dados = $request->all();
        
        Produto::create($dados);
        return redirect()->route('produtos.index');
        
    }

    public function editar($id){
        $produto = Produto::find($id);
        return view('layout.editar',['produto' => $produto]);
    }

    public function atualizar(Request $request, $id){
        $dados = $request->all();
        Produto::find($id)->update($dados);
        
        return redirect()->route('produtos.index');
        
    }

    public function deletar($id){
        Produto::find($id)->delete();
        return redirect()->route('produtos.index');
    }
}
