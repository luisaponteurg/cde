<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('code_internal');
            $table->integer('area_id')->unsigned();
            $table->integer('modality_id')->unsigned();

            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('modality_id')->references('id')->on('modalities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('careers');
    }
}
