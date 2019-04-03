<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreInscriptionsTable extends Migration
{
    public function up()
    {
        Schema::create('pre_inscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bank_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('period_details_id')->unsigned();
            $table->integer('deposit_id')->unsigned();
            $table->string('status');
            $table->date('date');
            $table->string('average');
            $table->string('validar');

            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('period_details_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('deposit_id')->references('id')->on('deposits')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pre_inscriptions');
    }
}
