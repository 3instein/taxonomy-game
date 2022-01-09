<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPowerColumnToUserCreatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bio10_user_creatures', function (Blueprint $table) {
            $table->bigInteger('power')->after('species_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bio10_user_creatures', function (Blueprint $table) {
            $table->dropColumn('power');
        });
    }
}
