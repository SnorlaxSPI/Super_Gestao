<?php

namespace Database\Seeders;

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contato = new SiteContato();
        $contato->nome = 'Site Contato 1';
        $contato->email = 'contato@sitecontato1.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Sistema Super Gestão';
        $contato->save();
    }
}
