<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilizadorController extends Controller
{
    public function login(Request $request){
        $data = [];

        //Se entrar nesse IF é por que o utilizador clicou no botão Login
                    $login = $request->input("login");
                    $password = $request->input("password");

        if($request->isMethod("POST")){            

            $credential = ['login' => $login, 'password' => $password];
            //Login
            if(Auth::attempt($credential)){
                $request->session()->regenerate();
                return redirect()->route("layout");
            }else{
                session()->flash("err", "Utilizador / palavra-passe inválido");
                return redirect()->route("login");
            }
        }
        
        return view("login", $data);
    }

    public function sair(Request $request){
        //deslogar o utilizador
        Auth::logout();
        return redirect()->route("home");
    }
}