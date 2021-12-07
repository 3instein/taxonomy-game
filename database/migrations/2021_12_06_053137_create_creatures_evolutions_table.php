<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreaturesEvolutionsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('creatures_evolutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('species_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger('price');
            $table->foreignId('prerequisite_id')
                ->nullable()
                ->references('id')
                ->on('creatures_evolutions')
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('creatures_evolutions');
    }
}
