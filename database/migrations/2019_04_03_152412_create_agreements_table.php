<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgreementsTable extends Migration
{
    public function up()
    {
        Schema::create('agreements', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->string('national');
            $table->string('institution_name');
            $table->integer('career_id')->unsigned();

            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('agreements');
    }
}
