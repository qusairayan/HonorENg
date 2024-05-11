<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateWorkingHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_hours', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('day');
            $table->string('time_from')->nullable();
            $table->string('time_to')->nullable();
            $table->integer('off_day')->default(0);
            $table->timestamps();
        });


        DB::table('working_hours')->insert([
            ['day' => 'saturday','off_day'=>1],
            ['day' => 'sunday','off_day'=>1],
            ['day' => 'monday','off_day'=>1],
            ['day' => 'tuseday','off_day'=>1],
            ['day' => 'wednseday','off_day'=>1],
            ['day' => 'thurseday','off_day'=>1],
            ['day' => 'friday','off_day'=>1],
        ]);
    


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('working_hours');
    }
}
