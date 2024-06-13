<?php

namespace App\Models;

class pedido extends RModel
{
    protected $table = "pedidos";
    protected $dates = ['dt_pedido'];
    protected $fillable = ['dt_pedido', 'status', 'utilizador_id'];

    public function statusDesc(){
        $desc = "";
        switch($this -> status){
            case 'PEN': $desc = "PENDENTE";break;
            case 'APR': $desc = "APROVADO";break;
            case 'CAN': $desc = "CANCELADO";break;
        }
        return $desc;
    }

}
