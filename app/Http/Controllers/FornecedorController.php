<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            'Fornecedor 40',
            'Fornecedor 41',
            'Fornecedor 42',
            'Fornecedor 43',
            'Fornecedor 44',
            'Fornecedor 45',
            'Fornecedor 46',
            'Fornecedor 47',
            'Fornecedor 48',
            'Fornecedor 49',
            'Fornecedor 50',
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
