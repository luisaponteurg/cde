<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadquartersTable extends Migration
{
    public function up()
    {
        Schema::create('headquarters', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('phone');
            $table->integer('institution_id')->unsigned();
            $table->integer('type_headquarter_id')->unsigned();
            $table->integer('location_id')->unsigned();

            $table->foreign('institution_id')->references('id')->on('institutions');
            $table->foreign('type_headquarter_id')->references('id')->on('headquarter_types');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('headquarters');
    }
}
