<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function verUsuarios()
{
    $usuarios = User::all(); // Obtén todos los usuarios desde la base de datos
    return view('ADMIN.ver_usuarios', ['usuarios' => $usuarios]);
}

public function editarUsuario($id)
{
    $usuario = User::find($id); // Encuentra el usuario por ID
    return view('ADMIN.editar_usuario', ['usuario' => $usuario]);
}

public function actualizarUsuario(Request $request, $id)
{
    $usuario = User::find($id);
    $usuario->role = $request->input('role');
    $usuario->save();

    return redirect()->route('admin.ver-usuarios')->with('success', 'Rol de usuario actualizado con éxito');
}


}
