<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;

class Utilizador extends RModel implements Authenticatable
{
    protected $table = "utilizadores";

    protected $fillable = ['login','email', 'password', 'nome'];
 
    public function getAuthIdentifierName(){
            return $this->getKey();
    }
    public function getAuthIdentifier(){
            return $this->login;
    }
    public function getAuthPassword(){
            return $this->password;
    }
    public function getRememberToken(){

    }
    public function setRememberToken($value){

    }
    public function getRememberTokenName(){

    }

    
}
