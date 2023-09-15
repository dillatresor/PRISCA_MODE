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
        Schema::create('coutures', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->date('date_depot');
            $table->date('date_recuperation');
            $table->unsignedBigInteger('models_id')->unsigned();
            $table->foreign('models_id')->references('id')->on('models')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coutures');
    }
};
