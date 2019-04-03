<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentTypesTable extends Migration
{
    public function up()
    {
        Schema::create('document_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('limit');
            $table->string('mount');
            $table->string('name');
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('document_types');
    }
}
