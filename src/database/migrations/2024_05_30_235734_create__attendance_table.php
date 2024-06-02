<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_attendance', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191)->unique();
            $table->timestamp('start__at')->useCurrent()->nullable();
            $table->timestamp('end__at')->useCurrent()->nullable();
            $table->timestamp('break__start')->useCurrent()->nullable();
            $table->timestamp('break__end')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance');
    }
}
