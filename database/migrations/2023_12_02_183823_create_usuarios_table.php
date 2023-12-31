<?php

use App\Enums\StatusPadrao;
use App\Enums\TipoUsuario;
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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email', 100);
            $table->string('senha', 100);
            $table->enum('tipo', TipoUsuario::getValues());
            $table->enum('status', StatusPadrao::getValues())->default(StatusPadrao::Ativo->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
