<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrerequisiteIdToSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bio10_species', function (Blueprint $table) {
            $table->foreignId('prerequisite_id')
                ->after('image_path')
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
        Schema::table('bio10_species', function (Blueprint $table) {
        $table->dropColumn('prerequisite_id');
        });
    }
}
