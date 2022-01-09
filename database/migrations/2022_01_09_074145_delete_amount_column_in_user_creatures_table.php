<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteAmountColumnInUserCreaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bio10_user_creatures', function (Blueprint $table) {
            $table->dropColumn('amount');
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
            $table->integer('amount')->after('power')->default(1);
        });
    }
}
