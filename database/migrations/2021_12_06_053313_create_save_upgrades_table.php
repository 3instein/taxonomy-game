<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaveUpgradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save_upgrades', function (Blueprint $table) {
            $table->foreignId('save_id')
                ->references('id')
                ->on('user_saves')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('upgrade')
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
        Schema::dropIfExists('save_upgrades');
    }
}
