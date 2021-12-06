<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDnaColumnToEvoColumnInUserSavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_saves', function (Blueprint $table) {
            $table->dropColumn('dna');
            $table->unsignedBigInteger('evo')->after('student_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_saves', function (Blueprint $table) {
            $table->unsignedBigInteger('dna')->after('student_id');
            $table->dropColumn('evo');
        });
    }
}
