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
        Schema::create('permisoests', function (Blueprint $table) {
            $table->id();
            $table->string('motivo');
            $table->string('dias',2);
            $table->string('dias1');
            $table->string('dias2')->nullable();
            $table->string('dias3')->nullable();
            $table->string('obs',800);
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')
                  ->references('id')
                  ->on('estudiantes')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisoests');
    }
};
