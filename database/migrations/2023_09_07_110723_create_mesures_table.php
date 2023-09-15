<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mesures', function (Blueprint $table) {
            $table->id();
            $table->Integer('tete');
            $table->Integer('cou');
            $table->Integer('epaule');
            $table->Integer('longueur_de_bras');
            $table->Integer('poitrine');
            $table->Integer('tour_de_taille');
            $table->Integer('longueur_du_corps');
            $table->Integer('hanches');
            $table->Integer('cuisse');
            $table->Integer('genou');
            $table->Integer('mollet');
            $table->Integer('cheville');
            $table->Integer('biceps');
            $table->Integer('coude');
            $table->Integer('avant_bras');
            $table->Integer('poignet');
            $table->Integer('poignet_coude');
            $table->Integer('entrejambe');
            $table->Integer('genou_cheville');
            $table->Integer('couture_exterieure');
            $table->Integer('hauteur_totale');
            $table->unsignedBigInteger('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('models_id')->unsigned();
            $table->foreign('models_id')->references('id')->on('models')->onDelete('cascade')->onUpdate('cascade');
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesures');
    }
};
