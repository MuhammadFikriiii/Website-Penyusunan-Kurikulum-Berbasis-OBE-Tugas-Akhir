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
        Schema::create("bk_mk", function (Blueprint $table) {
            $table->string('kode_mk');
            $table->string('kode_bk');
            $table->foreign('kode_mk')->references('kode_mk')->on('mata_kuliahs')->onDelete('cascade');
            $table->foreign('kode_bk')->references('kode_bk')->on('bahan_kajians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bk_mk');
    }
};
