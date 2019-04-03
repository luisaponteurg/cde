<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalitiesTable extends Migration
{
    public function up()
    {
        Schema::create('modalities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('opsu');
            $table->boolean('finished');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('modalities');
    }
}
