<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArcherGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archer_game', function (Blueprint $table) {
            $table->id();
            $table->foreignId('archer_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('game_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archer_game');
    }
}
