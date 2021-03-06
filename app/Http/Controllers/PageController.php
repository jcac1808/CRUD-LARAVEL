<?php

namespace App\Http\Controllers;

use App\Models\Profession;
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
        $profesiones=Profession::get();
        return view('usuariocrear', compact('profesiones'));
    }

    public function store()
    {
        $data = request()->validate([
            'profession_id' => 'required',
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'pwd' => ''
        ],[
            'profession_id.required' => 'Escoja el codigo de la profesion',
            'name.required' => 'El campo nombre es obligarotio',
            'email.required' => 'El campo correo electronido es obligarotio',
            'email.unique' => 'El correo electronido ya ha sido registrado'
        ]);

        // $data = request()->all(); //solo utilizar para pruebas

        $user=new User();
        $user->profession_id=$data['profession_id'];
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->password=bcrypt($data['pwd']);
        $user->save();

        return redirect()->route('home');
    }

    public function editar(User $user)
    {
        $profesiones=Profession::get();
        return view('usuarioeditar', compact('user','profesiones')); 
    }

    public function actualizar(User $user)
    {

        $data = request()->validate([
            'profession_id' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'pwd' => ''
        ],[
            'profession_id.required' => 'Escoja el codigo de la profesion',
            'name.required' => 'El campo nombre es obligarotio',
            'email.required' => 'El campo correo electronido es obligarotio',
            'email.unique' => 'El correo electronido ya ha sido registrado'
        ]);

        $user->profession_id=$data['profession_id'];
        $data['pwd']=bcrypt($data['pwd']);
        $user->update($data);
        return redirect()->route('home');
    }

    public function eliminar(User $user)
    {
        $user->delete();
        return redirect()->route('home');
    }
}
