<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->string('email')->unique();
            $table->date('brithdate');
            $table->enum('genere', ['Masculino', 'Femenino']);
            $table->integer('identity')->unique();
            $table->string('first_name');
            $table->string('first_s_name')->nullable();
            $table->string('last_name');
            $table->string('last_s_name')->nullable();
            $table->integer('phone');
            $table->enum('doc_type', ['V', 'E', 'P']);
            $table->integer('ethnic_id')->unsigned();
            $table->integer('parish_id')->unsigned();

            $table->foreign('ethnic_id')->references('id')->on('ethnics')->onDelete('cascade');
            $table->foreign('parish_id')->references('id')->on('parishes')->onDelete('cascade');
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
        Schema::dropIfExists('people');
    }
}
