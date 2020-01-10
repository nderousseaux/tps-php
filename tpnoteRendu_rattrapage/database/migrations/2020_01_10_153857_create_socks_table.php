<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description',255);
            $table->string('longueur',255);
            $table->string('etat',255);
            $table->string('matiere',255);
            $table->string('proprietaire',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socks');
    }
}
