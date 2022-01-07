<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSpeciesIdToEvolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bio10_evolutions', function (Blueprint $table) {
            $table->foreignId('species_id')
                ->after('id')
                ->nullable()
                ->references('id')
                ->on('bio10_species')
                ->constrained()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bio10_evolutions', function (Blueprint $table) {
            $table->dropColumn('species_id');
        });
    }
}
