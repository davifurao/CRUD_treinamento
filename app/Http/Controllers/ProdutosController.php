<?php

namespace App\Http\Controllers;
use App\Models\Produto;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create()
    { //função que realiza a operação create
        return view('produtos.create');
    }

    public function store(Request $request) //$request é um objeto de Request
    {
        Produto::create([
            'nome'=> $request->nome,
            'custo'=> $request->custo,
            'preco'=> $request->preco,
            'quantidade'=> $request->quantidade,
        ]);
        return "Produto criado com sucesso!!!";
    }
}
