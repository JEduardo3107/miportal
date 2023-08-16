<?php

namespace App\Http\Controllers\session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller{
    public function index(){
        if(auth()->user()){
            return redirect()->route('home');
        }

        return view('session.login');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // valida si los datos son correctos, en caso de error, volver a la vista pero con un mensaje de error incluido
        if(!auth()->attempt($request->only('email', 'password'), false)){
            return back()->with('mensaje', 'credenciales incorrectas');
        }

        // redirecciona a la ruta en caso de exito
        return redirect()->route('home');
    }




}