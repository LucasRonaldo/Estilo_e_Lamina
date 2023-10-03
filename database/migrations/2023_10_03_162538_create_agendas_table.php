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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('profissional', 120)->nullable(false);
            $table->string('cliente', 11)->nullable(true);
            $table->string('servico', 120)->unique()->nullable(true);
            $table->string('data_hora', 11 )->unique()->nullable(false);
            $table->date('pagamento',)->unique()->nullable(false);
            $table->string('valor', 120)->nullable(false);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
