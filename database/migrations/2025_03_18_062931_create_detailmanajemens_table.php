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
        Schema::create('detailmanajemens', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('penulis');
            $table->string('penerbit');
            $table->string('tahun_terbit');
            $table->foreignId('manajemen_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailmanajemens');
    }
};
