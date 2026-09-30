<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // get: Devuelve la paginación de los diez primeros usuarios.
    public function index()
    {
        $users = User::paginate(10);
        return response()->json($users);
    }

    // create: Crea un usuario en la base de datos.
    public function create(Request $request)
    {
        $data = $request->validate([
            'username' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'max:255']
        ]);

        $user = User::create($data);

        return response()->json($user, 201);
    }

    // login: Devuelve los datos de un usuario introduciendo solo el email y la contraseña.
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        return response()->json($user);
    }

    // update_username: Actualiza el username de un usuario pasándole el email y la contraseña.
    public function updateUsername(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'new_username' => ['required', 'string', 'min:3', 'max:255']
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        $user->update(['username' => $request->new_username]);

        return response()->json(['message' => 'Username actualizado correctamente', 'user' => $user]);
    }

    // update_email: Actualiza el email de un usuario pasándole el email y la contraseña.
    public function updateEmail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'new_email' => ['required', 'email', 'max:255', 'unique:users,email']
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        $user->update(['email' => $request->new_email]);

        return response()->json(['message' => 'Email actualizado correctamente', 'user' => $user]);
    }

    // update_password: Actualiza la contraseña de un usuario pasándole el email y la contraseña.
    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'min:8', 'max:255']
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        $user->update(['password' => $request->new_password]);

        return response()->json(['message' => 'Contraseña actualizada correctamente', 'user' => $user]);
    }

    // delete: Elimina el usuario pasándole email y contraseña.
    public function delete(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        $user->delete();

        return response()->json(['message' => 'Usuario eliminado correctamente']);
    }
}
