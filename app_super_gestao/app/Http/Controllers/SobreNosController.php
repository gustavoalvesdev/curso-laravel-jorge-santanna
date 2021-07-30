<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    /**
     * Controller principal para a rota [GET] /sobre-nos
     *
     * @return void
     */
    public function sobreNos()
    {
        echo 'Sobre nós';
    }
}
