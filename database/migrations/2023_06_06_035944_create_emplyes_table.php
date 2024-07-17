<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplyes', function (Blueprint $table) {
            $table->id();
            $table->integer('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->string('CIN');
            $table->date('birthdate');
            $table->date('hiredate');
            $table->integer('phone');
            $table->string('genre');
            $table->string('grade');
            $table->integer('echelle');
            $table->integer('echelon');
            $table->integer('indice');
            $table->string('arrondisement');
            $table->string('division');
            $table->string('service');
            $table->string('poste');
            $table->string('niveau');
            $table->string('specialite');
            $table->string('nature');
            $table->string('nometablissement');
            $table->string('villeetablissement');
            $table->string('commentaire');
            $table->string('autrediplome');
            $table->string('NAA');
            $table->string('NAO');
            $table->date('roteurdate');
            $table->string('voiture');
            $table->integer('model');
            $table->string('dotation');
            $table->string('longement');
            $table->integer('note');
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
        Schema::dropIfExists('emplyes');
    }
};
