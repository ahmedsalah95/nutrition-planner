<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo');
            $table->string('email');
            $table->string('filter_price_start');
            $table->string('filter_price_end');
            $table->string('phone');
            $table->string('address');
            $table->string('flicker_description');
            $table->string('mailing_description');
            $table->string('get_in_touch_description');
            $table->string('whats_app');
            $table->string('facebook');
            $table->string('skype');
            $table->string('viber');
            $table->string('youtube');
            $table->string('live');
            $table->string('google');
            $table->string('cities');
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
        Schema::dropIfExists('settings');
    }
}
