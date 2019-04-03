<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerHeadquartersTable extends Migration
{
    public function up()
    {
        Schema::create('career_headquarters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('career_id')->unsigned();
            $table->integer('headquarter_id')->unsigned();

            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');
            $table->foreign('headquarter_id')->references('id')->on('headquarters')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('career_headquarters');
    }
}
