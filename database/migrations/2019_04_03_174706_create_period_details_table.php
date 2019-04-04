<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('period_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('period');
            $table->integer('lapse_id')->unsigned();
            $table->integer('career_headquarter_id')->unsigned();
            
            $table->foreign('lapse_id')->references('id')->on('lapses')->onDelete('cascade');
            $table->foreign('career_headquarter_id')->references('id')->on('career_headquarters')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('period_details');
    }
}
