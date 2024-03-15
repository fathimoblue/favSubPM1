<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Fecades\Auth;

class UserController extends Controller
{
 public function login(Request $request) {
    $credentials = $request -> validate ([
     'enail' => 'required|email',
     'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
      return redirect('/');
    }

    return back()->withErrors(['email' => 'Credenciales incorrectas', 'password' => 'Contraseña incorrecta']);
}

public function create() {

}

}
