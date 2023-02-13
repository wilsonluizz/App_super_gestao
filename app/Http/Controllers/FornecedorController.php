<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = ['fornecedor1','fornecedor2','fornecedor3','fornecedor4','fornecedor5',];

        $_msg = empty($fornecedores) ? 'variável está vazia' : 'variável não está vazia';
        echo $msg;
        return view ('app.fornecedor.index', compact('fornecedores'));
    }
}
