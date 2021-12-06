<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SaveCreatures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save_creatures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('save_id')
                ->references('id')
                ->on('user_saves')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('species_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->integer('amount');
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
        Schema::dropIfExists('save_creatures');
    }
}
