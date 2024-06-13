<?php

namespace App\Models;

class Endereco extends RModel
{
    protected $table = "enderecos";
    protected $fillable = ['morada', 'numero', 'codigopostal', 'cidade', 'distrito'];

}
