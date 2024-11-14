<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompeticionsTable extends Migration
{
    public function up()
    {
        Schema::create('competicions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('tipo_competicion_id');
            $table->string('deporte_id');
            $table->string('genero_id');
            $table->string('url_name')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('competicions');
    }
}
