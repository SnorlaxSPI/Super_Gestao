<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        //echo "O parâmetro 1 é: {$p1} <br>";
        //echo "O parâmetro 2 é: {$p2} <br>";

        //return view('site.teste', ['p1' => $p1, 'p2' => $p2]); // array associativo
        //return view('site.teste')->with('p1', $p1)->with('p2', $p2); // método with
        return view('site.teste', compact('p1', 'p2')); // função compact
    }
}
