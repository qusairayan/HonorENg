<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngineersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineers', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('user_id');
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->string('phone');
  voltring('email');
            $table->string('password');
            $table->string('address');
            $table->double('rate')->nullable();
            $table->integer('rate_count')->nullable();
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
        Schema::dropIfExists('engineers');
    }
}
