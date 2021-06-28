<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function __invoke(){
        return "Homepage controller";
    }

    public function index(){
        $produtos=produto::orderby('id', 'desc')->paginate();
        return view('produtos.index', ['produtos'=>$produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function insert(Request $request){
        $produto= new produto();
        $produto->nome=$request->nome;
        $produto->descricao=$request->descricao;
        $produto->preco=$request->preco;
        $produto->quantidade=$request->quantidade;
        $produto->save();
        return redirect()->route('produtos');
    }

    public function edit(produto $produto){
        return view('produtos.edit', ['produto'=>$produto]);
    }

    public function editar(Request $request, produto $produto){
        $produto->nome=$request->nome;
        $produto->descricao=$request->descricao;
        $produto->preco=$request->preco;
        $produto->quantidade=$request->quantidade;
        $produto->save();
        return redirect()->route('produtos');
    }

    public function delete(produto $produto){
        $produto->delete();
        return redirect()->route('produtos');
    }

    public function modal($id){
        
        $produtos=produto::orderby('id', 'desc')->paginate();
        return view('produtos.index', ['produtos'=>$produtos, 'id'=>$id]);
    
    }

    public function show($nome, $valor=null){
        if ($valor){
            return "Products... $nome e o preço é $valor";
        } else {
            return "Products.... $nome";
            
        }
    }
}
