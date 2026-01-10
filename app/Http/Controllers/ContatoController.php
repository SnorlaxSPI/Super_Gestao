<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        return view('site.contato', ['titulo' => 'Contato']);
    }

    public function salvar(Request $request)
    {
        // Realizar a validação dos dados recebidos no $request
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000',
        ]);
        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');

        // $contato->save();

        // $contato = new SiteContato();
        // $contato->create($request->all());

        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}
