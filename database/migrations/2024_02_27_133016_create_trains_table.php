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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 64);
            $table->string('stazione_partenza', 64);
            $table->string('stazione_arrivo', 64);
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            $table->string('codice_treno', 10);
            $table->unsignedInteger('numero_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
