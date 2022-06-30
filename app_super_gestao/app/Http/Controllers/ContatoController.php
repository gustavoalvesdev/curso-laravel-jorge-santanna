<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Controller principal da rota [GET] /contato
     *
     * @return void
     */
    public function contato()
    {

        var_dump($_GET);

        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}
