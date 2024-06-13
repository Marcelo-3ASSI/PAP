<?php

namespace App\Services;

use App\Models\Utilizador;
use App\Models\Endereco;
use Log;

class ClienteService {

    public function guardarUtilizador(Utilizador $user, Endereco $endereco){
        try{
            //Buscar um utilizador com o login que deve ser guardado
            $dbUtilizador = Utilizador::where("login", $user->login)->first();
            if($dbUtilizador){
                return ['status' => 'err', 'message' => 'Login já registado no sistema'];
            }

            \DB::beginTransaction();//Iniciar a transação
            $user->save(); // guardar o utilizador
            $endereco->utilizador_id = $user->id; //Relacionamento das tabelas
            $endereco->save(); // Guardar o endereco
            \DB::commit(); //Confirmar a transação

            return ['status' => 'ok', 'message' => 'Utilizador registado com sucesso!']; 
        }catch(\Exception $e){
                //Tratar o erro 
                \Log::error("ERRO", ['file' => 'ClienteService.guardarUtilizador',
                                            'message' => $e->getMessage()]);
                \DB::rollback(); //Cancelar a transação
                return ['status' => 'err', 'message' => 'Não pode registar um utilizador']; 
        }
    }

}