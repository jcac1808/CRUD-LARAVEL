<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function show()
    {
        // forma de depurar codigo
        // dd('entro');
        // $users=['Juan','Carlos','Franz'];
        // $users=[];

        $users = User::get();
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

    public function showuser($id)
    {
        $user = User::find($id);
        return view('usuario', compact('user'));
    }
}
