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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')
                  ->references('id')
                  ->on('cursos')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('nivel_id');
            $table->foreign('nivel_id')
                  ->references('id')
                  ->on('nivels')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
