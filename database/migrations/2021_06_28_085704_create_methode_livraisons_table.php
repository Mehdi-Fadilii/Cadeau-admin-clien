<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMethodeLivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('methode_livraisons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Zone');
            $table->string('Composition');
            $table->string('Type');
            $table->string('Couts');
            $table->string('creer par');
            $table->date('creer le');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('methode_livraisons');
    }
}
