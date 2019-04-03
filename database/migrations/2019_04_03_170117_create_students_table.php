<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('residency');
            $table->string('cni')->nullable();
            $table->integer('person_id')->unsigned();
            $table->integer('deposit_id')->unsigned();
            $table->integer('modality_id')->unsigned();

            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('deposit_id')->references('id')->on('deposits')->onDelete('cascade');
            $table->foreign('modality_id')->references('id')->on('modalities')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
