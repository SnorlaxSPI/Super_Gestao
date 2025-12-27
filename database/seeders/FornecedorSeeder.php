<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // instanciando o objeto fornecedor
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        // o metodo create (atencao para o uso do fillable no model)
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'uf' => 'SP',
            'email' => 'contato@fornecedor200.com.br'
        ]);

        // insert 
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'uf' => 'SP',
            'email' => 'contato@fornecedor300.com.br'
        ]);
    }
}
