<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('coba', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('NIM');
            $table->string('Prodi');
            $table->string('Kelas');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coba');
    }
};
