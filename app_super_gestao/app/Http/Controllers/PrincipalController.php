<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    /**
     * função principal
     *
     * @return void
     */
    public function principal()
    {
        return view('site.principal');
    }
}
