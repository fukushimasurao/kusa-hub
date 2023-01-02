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
        Schema::create('done_tasks', function (Blueprint $table) {
            $table->id();
//            $table->foreignId('user_id')->constrained('users');
//            $table->foreignId('task_id')->constrained('tasks');
            $table->integer('user_id');
            $table->integer('task_id');
            $table->dateTime('date');
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
