<?php

use App\Enums\StatusReserva;
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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->integer('sala_id');
            $table->integer('usuario_id');
            $table->dateTime('data_hora_inicio');
            $table->datetime('data_hora_fim');
            $table->enum("status_reserva", StatusReserva::getValues());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
