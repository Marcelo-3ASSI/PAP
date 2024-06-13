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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments("id");
            
            $table->datetime("dt_pedido");
            $table->string("status", 5);
            $table->integer("utilizador_id")->unsigned();

            $table->timestamps();

            $table->foreign("utilizador_id")
                ->references("id")->on("utilizadores")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
