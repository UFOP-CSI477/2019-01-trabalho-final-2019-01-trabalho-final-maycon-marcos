<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAparelhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aparelhos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('comodo_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nome');
            $table->decimal('potencia');
            $table->decimal('hora');
            $table->decimal('consumo');
            $table->timestamps();

            $table->foreign('comodo_id')
                      ->references('id')
                      ->on('comodos');
                      
            $table->foreign('user_id')
                        ->references('id')
                          ->on('users');          


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aparelhos');
    }
}
