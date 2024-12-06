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
        Schema::create('users', function (Blueprint $table) { // Nama tabel diisi 'users'
            $table->id(); // ID unik (primary key)
            $table->string('nama'); // Nama calon santri
            $table->string('jenis_kelamin'); // Jenis kelamin
            $table->string('sumber')->nullable(); // Sumber informasi (nullable)
            $table->string('cabang'); // Cabang pilihan
            $table->string('program'); // Program pilihan
            $table->string('email')->unique(); // Email unik
            $table->string('password'); // Password (hashed)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Hapus tabel 'users' jika rollback
    }
};
