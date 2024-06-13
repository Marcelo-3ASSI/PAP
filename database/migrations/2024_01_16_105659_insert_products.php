<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Categoria(['categoria' => 'Pranchas']);
        $cat->save();

        $cat = new \App\Models\Categoria(['categoria' => 'Acessorios']);
        $cat->save();

        $prod = new \App\Models\Produto(['nome' => 'Produto1', 'valor' => 10, 'foto' => 'images/produto1.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod2 = new \App\Models\Produto(['nome' => 'Produto2', 'valor' => 10, 'foto' => 'images/produto2.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod2->save();

        $prod3 = new \App\Models\Produto(['nome' => 'Produto3', 'valor' => 10, 'foto' => 'images/produto3.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod3->save();

        $prod4 = new \App\Models\Produto(['nome' => 'Produto4', 'valor' => 10, 'foto' => 'images/produto4.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod4->save();

        $prod5 = new \App\Models\Produto(['nome' => 'Produto5', 'valor' => 10, 'foto' => 'images/produto5.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod5->save();

        $prod6 = new \App\Models\Produto(['nome' => 'Produto6', 'valor' => 10, 'foto' => 'images/produto6.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod6->save();

        $prod7 = new \App\Models\Produto(['nome' => 'Produto7', 'valor' => 10, 'foto' => 'images/produto7.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod7->save();

        $prod8 = new \App\Models\Produto(['nome' => 'Produto8', 'valor' => 10, 'foto' => 'images/produto8.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod8->save();

        $prod9 = new \App\Models\Produto(['nome' => 'Produto9', 'valor' => 10, 'foto' => 'images/produto9.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod9->save();

        $prod10 = new \App\Models\Produto(['nome' => 'Produto10', 'valor' => 10, 'foto' => 'images/produto10.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod10->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
