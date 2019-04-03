<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodsTable extends Migration
{
    public function up()
    {
        Schema::create('periods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('period')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('periods');
    }
}
