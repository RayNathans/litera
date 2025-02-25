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
        Schema::create('organisasi_cabangs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_cabang');
            $table->string('alamat_cabang');
            $table->string('no_telp_cabang');
            $table->string('email_cabang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisasi_cabangs');
    }
};
