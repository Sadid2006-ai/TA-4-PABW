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
        Schema::create('ide', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('kategori_id')->constrained('kategori');
            $table->string('judul');
            $table->string('gambar')->nullable();
            $table->text('deskripsi');
            $table->string('status')->default('Diajukan'); // Diajukan, Sedang Progress, Selesai
            $table->date('tanggal_pengajuan');
            $table->unsignedInteger('jumlah_like')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ide');
    }
};
