<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00.000.000/0001-00',
                'ddd' => '', // São Paulo
                'telefone' => '99999-9999'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '00.000.000/0001-01',
                'ddd' => '14', // Bauru
                'telefone' => '88888-8888'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => '00.000.000/0001-02',
                'ddd' => '16', // Ribeirão Preto
                'telefone' => '77777-7777'
            ],
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
