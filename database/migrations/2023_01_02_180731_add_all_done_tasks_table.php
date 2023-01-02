<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_done_tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
//            $table->foreignId('user_id')->constrained('users');
            $table->dateTime('date');
            $table->integer('sum_done_tasks')->comment('その日に何個対応(done)したか。');
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
        //
    }
};
