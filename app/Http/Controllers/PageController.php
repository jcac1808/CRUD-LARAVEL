<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function show()
    {
        // forma de depurar codigo
        // dd('entro');
        $users=['Juan','Carlos','Franz'];
        // $users=[];
        return view('inicio', compact('users'));
    }

    public function saludo()
    {
        return view('saludo');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
