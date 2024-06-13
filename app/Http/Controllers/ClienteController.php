<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilizador;
use App\Models\Endereco;
use App\Services\ClienteService;

class ClienteController extends Controller
{

    public function index(Request $request){
        $data = [];

        return view("home", $data);
    }
    public function registar(Request $request){
        $data = [];

        return view("registar", $data);
    }

    public function registarCliente(Request $request){

        //Pegar todos os valores do formulario
        $values = $request->all();
        $utilizador = new Utilizador();
        //$utilizador->login = $request->input("login", "");
        $utilizador->fill($values);
        $utilizador->login = $request->input("login", "");

        $password = $request->input("password", "");
        $utilizador->password = \Hash::make($password);

        $endereco = new Endereco($values);
        $endereco->morada = $request->input("morada", "");

        $clienteService = new ClienteService();
        $result = $clienteService ->guardarUtilizador($utilizador, $endereco);

        $message = $result["message"];
        $status = $result["status"];

        //ok, Registado com sucesso
        //err, Utilizador nao pode ser registado
        $request->session()->flash($status, $message);

        return redirect()->route("registar");
    }
}
