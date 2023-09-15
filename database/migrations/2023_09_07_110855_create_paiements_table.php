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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->Integer('montant_payer');
            $table->Integer('avance');
            $table->Integer('reste');
            $table->date('date_paiement');
            $table->unsignedBigInteger('coutures_id')->unsigned();
            $table->foreign('coutures_id')->references('id')->on('coutures')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
