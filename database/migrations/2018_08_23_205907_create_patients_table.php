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
            $table->String('phone')->nullable();
            $table->String('register_date')->nullable();
            $table->String('email')->nullable();
            $table->String('birthday')->nullable();
            $table->String('gender')->nullable();
            $table->String('weight')->nullable();
            $table->String('height')->nullable();
            $table->String('age')->nullable();
            $table->longText('health_condition')->nullable();
            $table->String('body_fat')->nullable();
            $table->longText('goal')->nullable();
            $table->string('activity_level')->nullable();
            $table->String('food_type_diet')->nullable();
            $table->String('dont_eat')->nullable();
            $table->String('system')->nullable();
            $table->String('sensitivity')->nullable();
            $table->String('blood')->nullable();
            $table->String('sleeping_hours')->nullable();
            $table->String('water')->nullable();
            $table->String('diet')->nullable();
            $table->String('diet_name')->nullable();
            $table->String('diet_result')->nullable();
            $table->String('fats_in_body')->nullable();
            $table->String('muscles')->nullable();
            $table->String('water_in_body')->nullable();
            $table->String('minerals')->nullable();
            $table->String('khasr')->nullable();

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
