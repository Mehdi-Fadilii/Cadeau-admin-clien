<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivreursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livreurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('CIN');
            $table->string('Tel');
            $table->string('Mail');
            $table->string('Contrat');
            $table->string('Durée de contrat');
            $table->string('Ajouter par');
            $table->date('Ajouter le');
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
        Schema::dropIfExists('livreurs');
    }
}
