<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPowerAndEvoColumnToStudentsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedBigInteger('power')
                ->after('birthyear')
                ->default(1);
            $table->unsignedBigInteger('evo')
                ->after('power')
                ->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['power', 'evo']);
        });
    }
}
