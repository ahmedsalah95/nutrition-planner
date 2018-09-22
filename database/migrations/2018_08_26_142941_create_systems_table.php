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
            $table->String('system_name')->nullable();
            $table->longText('system_desc')->nullable();


            $table->longText('day1_breakfast')->nullable();
            $table->longText('day1_lunch')->nullable();
            $table->longText('day1_dinner')->nullable();
            $table->longText('day1_break1')->nullable();
            $table->longText('day1_break2')->nullable();
            $table->longText('day1_notes')->nullable();

            $table->String('carbSum')->nullable();
            $table->String('fatsSum')->nullable();
            $table->String('proteinSum')->nullable();
            $table->String('caloriesSum')->nullable();

            $table->longText('day2_breakfast')->nullable();
            $table->longText('day2_lunch')->nullable();
            $table->longText('day2_dinner')->nullable();
            $table->longText('day2_break1')->nullable();
            $table->longText('day2_break2')->nullable();
            $table->longText('day2_notes')->nullable();
            $table->String('carbSum2')->nullable();
            $table->String('fatsSum2')->nullable();
            $table->String('proteinSum2')->nullable();
            $table->String('caloriesSum2')->nullable();

            $table->longText('day3_breakfast')->nullable();
            $table->longText('day3_lunch')->nullable();
            $table->longText('day3_dinner')->nullable();
            $table->longText('day3_break1')->nullable();
            $table->longText('day3_break2')->nullable();
            $table->longText('day3_notes')->nullable();
            $table->String('carbSum3')->nullable();
            $table->String('fatsSum3')->nullable();
            $table->String('proteinSum3')->nullable();
            $table->String('caloriesSum3')->nullable();

            $table->longText('day4_breakfast')->nullable();
            $table->longText('day4_lunch')->nullable();
            $table->longText('day4_dinner')->nullable();
            $table->longText('day4_break1')->nullable();
            $table->longText('day4_break2')->nullable();
            $table->longText('day4_notes')->nullable();
            $table->String('carbSum4')->nullable();
            $table->String('fatsSum4')->nullable();
            $table->String('proteinSum4')->nullable();
            $table->String('caloriesSum4')->nullable();

            $table->longText('day5_breakfast')->nullable();
            $table->longText('day5_lunch')->nullable();
            $table->longText('day5_dinner')->nullable();
            $table->longText('day5_break1')->nullable();
            $table->longText('day5_break2')->nullable();
            $table->longText('day5_notes')->nullable();
            $table->String('carbSum5')->nullable();
            $table->String('fatsSum5')->nullable();
            $table->String('proteinSum5')->nullable();
            $table->String('caloriesSum5')->nullable();

            $table->longText('day6_breakfast')->nullable();
            $table->longText('day6_lunch')->nullable();
            $table->longText('day6_dinner')->nullable();
            $table->longText('day6_break1')->nullable();
            $table->longText('day6_break2')->nullable();
            $table->longText('day6_notes')->nullable();
            $table->String('carbSum6')->nullable();
            $table->String('fatsSum6')->nullable();
            $table->String('proteinSum6')->nullable();
            $table->String('caloriesSum6')->nullable();

            $table->longText('day7_breakfast')->nullable();
            $table->longText('day7_lunch')->nullable();
            $table->longText('day7_dinner')->nullable();
            $table->longText('day7_break1')->nullable();
            $table->longText('day7_break2')->nullable();
            $table->longText('day7_notes')->nullable();
            $table->String('carbSum7')->nullable();
            $table->String('fatsSum7')->nullable();
            $table->String('proteinSum7')->nullable();
            $table->String('caloriesSum7')->nullable();


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
