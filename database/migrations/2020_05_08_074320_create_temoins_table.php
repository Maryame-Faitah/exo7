<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temoins', function (Blueprint $table) {
            $table->id();
            $table->string('nom',30);
            $table->string('prenom',30);
            $table->string('fonction',50);
            $table->string('img',200);
            $table->string('temoignage',200);
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
        Schema::dropIfExists('temoins');
    }
}
