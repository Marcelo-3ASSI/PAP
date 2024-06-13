<?php

namespace App\Services;
use Log;
use App\Models\Utilizador;
use App\Models\pedido;
use App\Models\itens_pedido;

class VendaService {

    public function finalizarVenda($prods = [], $user){
        try{

            \DB::beginTransaction();
            $dtHoje = new \DateTime();

            $pedido = new Pedido();

            $pedido -> dt_pedido = $dtHoje -> format("Y/m/d H:i");
            $pedido -> status = "PEN";
            $pedido -> utilizador_id = $user->id;

            $pedido -> save();
            foreach($prods as $p){
                $itens = new itens_pedido();

                $itens -> quantidade = 1;
                $itens -> valor = $p -> valor;
                $itens -> dt_item = $dtHoje -> format("Y-m-d H:i:s");
                $itens -> produto_id = $p -> id;
                $itens -> pedido_id = $pedido ->id;
                $itens -> save();
            }

            \DB::commit();
            return [ 'status' => 'ok', 'message' => 'Venda finalizada com sucesso' ];
        }catch(\Exception $e){
            \DB::rollback();
            Log::error("ERRO: VENDA SERVICE", ['message' => $e -> getMessage()]);
            return [ 'status' => 'err', 'message' => 'Venda não pode ser finalizada' ];
        }
    }
}