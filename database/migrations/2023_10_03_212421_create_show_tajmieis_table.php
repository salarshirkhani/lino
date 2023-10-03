<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowTajmieisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_tajmieis', function (Blueprint $table) {
            $table->id();
            $table->string('first_shamsi');
            $table->string('last_shamsi');
            $table->string('duration');
            $table->string('15daysChangePrice');
            $table->string('30daysChangePrice');
            $table->string('45daysChangePrice');
            $table->string('60daysChangePrice');
            $table->string('AllTimeChangePrice');
            $table->string('15daysChangeMarket');
            $table->string('30daysChangeMarket');
            $table->string('45daysChangeMarket');
            $table->string('60daysChangeMarket');
            $table->string('AllTimeChangeMarket');
            $table->string('15daysChangePrice_After');
            $table->string('30daysChangePrice_After');
            $table->string('45daysChangePrice_After');
            $table->string('60daysChangePrice_After');
            $table->string('AllChangePrice_After');
            $table->string('15daysChangeMarket_After');
            $table->string('30daysChangeMarket_After');
            $table->string('60daysChangeMarket_After');
            $table->string('AllChangeMarket_After');
            $table->string('stock_name');
            $table->string('code');
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
        Schema::dropIfExists('show_tajmieis');
    }
}
