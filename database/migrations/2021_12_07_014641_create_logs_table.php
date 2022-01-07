<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('bio10_logs', function (Blueprint $table) {
            $table->id();
            $table->string('table');
            $table->foreignId('student_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('description');
            $table->string('route');
            $table->string('ip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('bio10_logs');
    }
}
