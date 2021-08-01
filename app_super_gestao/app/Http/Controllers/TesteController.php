<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{

    /**
     * Teste de passagem de parâmetro da rota
     * para o controlador
     *
     * @param integer $p1
     * @param integer $p2
     * @return void
     */
    public function teste(int $p1, int $p2)
    {
        echo 'A soma de ' . $p1 . ' + ' . $p2 . ' é = ' . ($p1 + $p2);
    }

}
