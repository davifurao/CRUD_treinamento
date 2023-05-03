<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create(){ //função que realiza a operação create
        return view('produtos.create');
    }
}
