<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systems', function (Blueprint $table) {
            $table->increments('id');
            $table->String('system_name');
            $table->longText('system_desc');


            $table->longText('day1_breakfast');
            $table->longText('day1_lunch');
            $table->longText('day1_dinner');
            $table->longText('day1_snacks');
            $table->longText('day1_workout');

            $table->longText('day2_breakfast');
            $table->longText('day2_lunch');
            $table->longText('day2_dinner');
            $table->longText('day2_snacks');
            $table->longText('day2_workout');

            $table->longText('day3_breakfast');
            $table->longText('day3_lunch');
            $table->longText('day3_dinner');
            $table->longText('day3_snacks');
            $table->longText('day3_workout');

            $table->longText('day4_breakfast');
            $table->longText('day4_lunch');
            $table->longText('day4_dinner');
            $table->longText('day4_snacks');
            $table->longText('day4_workout');

            $table->longText('day5_breakfast');
            $table->longText('day5_lunch');
            $table->longText('day5_dinner');
            $table->longText('day5_snacks');
            $table->longText('day5_workout');

            $table->longText('day6_breakfast');
            $table->longText('day6_lunch');
            $table->longText('day6_dinner');
            $table->longText('day6_snacks');
            $table->longText('day6_workout');

            $table->longText('day7_breakfast');
            $table->longText('day7_lunch');
            $table->longText('day7_dinner');
            $table->longText('day7_snacks');
            $table->longText('day7_workout');






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
        Schema::dropIfExists('systems');
    }
}
