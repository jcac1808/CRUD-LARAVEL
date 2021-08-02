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

    public function nuevo()
    {
        return view('usuariocrear');
    }

    public function store()
    {
        $data = request()->validate([
            'profession_id' => 'required',
            'name' => 'required',
            'email' => 'required',
        ],[
            'profession_id.required' => 'Escoja el codigo de la profesion',
            'name.required' => 'El campo nombre es obligarotio',
            'email.required' => 'El campo correo electronido es obligarotio'
        ]);

        // $data = request()->all();

        $user=new User();
        $user->profession_id=$data['profession_id'];
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->password=bcrypt($data['pwd']);
        $user->save();

        return redirect()->route('home');
    }
}
