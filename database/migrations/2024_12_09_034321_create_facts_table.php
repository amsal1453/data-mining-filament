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
        Schema::create('facts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained(
                table: 'students',
                indexName: 'facts_student_id' 
            )->onDelete('cascade');

            $table->foreignId('peminatan_id')->constrained(
                table: 'interests',
                indexName: 'facts_interests_id'
            )->onDelete('cascade');

            $table->foreignId('tahun_akademik_id')->constrained(
                table: 'years_academics',
                indexName: 'facts_years_academics_id'
            )->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facts');
    }
};
