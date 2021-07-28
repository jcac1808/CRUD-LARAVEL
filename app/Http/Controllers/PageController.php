<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function show()
    {
        return view('inicio');
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
