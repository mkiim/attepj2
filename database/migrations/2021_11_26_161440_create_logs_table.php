<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('login');
            $table->dateTime('logout');
            $table->integer('user_id');
        });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamp('created_at')->useCurrent()->nullable;
            $table->string('email');
            $table->string('password');
        });

        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->useCurrent()->nullable;
            $table->timestamp('start_time')->useCurrent()->nullable;
            $table->timestamp('end_time')->useCurrent()->nullable;
            $table->string('user_id');
        });
        Schema::create('bleaks', function (Blueprint $table) {
            $table->increments('id');
            $table->float('number');
            $table->timestamp('break_start')->useCurrent()->nullable;
            $table->timestamp('break_end')->useCurrent()->nullable;
            $table->string('work_id');
        });
        Schema::create('managers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamp('created_at')->useCurrent()->nullable;
            $table->string('work_id');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
        Schema::dropIfExists('users');
        Schema::dropIfExists('works');
        Schema::dropIfExists('breaks');
        Schema::dropIfExists('managers');

    }
    
}
