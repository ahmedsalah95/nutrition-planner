<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name');
            $table->String('phone');
            $table->String('register_date');
            $table->String('email');
            $table->String('birthday');
            $table->String('gender');
            $table->String('weight');
            $table->String('height');
            $table->String('age');
            $table->longText('health_condition');
            $table->String('body_fat');
            $table->longText('goal');
            $table->string('activity_level');
            $table->String('food_type_diet');
            $table->String('dont_eat');
            $table->integer('system')->nullable();
            $table->String('sensitivity')->nullable();
            $table->String('blood')->nullable();
            $table->String('sleeping_hours')->nullable();
            $table->String('water')->nullable();
            $table->String('diet')->nullable();
            $table->String('diet_name')->nullable();
            $table->String('diet_result')->nullable();

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
        Schema::dropIfExists('patients');
    }
}
