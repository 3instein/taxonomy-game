<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaveCreaturesUpgrades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save_creatures_upgrades', function (Blueprint $table) {
            $table->foreignId('save_creature_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('creatures_upgrades_id')
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
    public function down()
    {
        Schema::dropIfExists('save_creatures_upgrades');
    }
}
