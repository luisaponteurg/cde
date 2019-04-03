<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadquarterTypesTable extends Migration
{
    public function up()
    {
        Schema::create('headquarter_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description');
            $table->string('opsu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('headquarter_types');
    }
}
