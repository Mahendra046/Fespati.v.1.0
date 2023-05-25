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
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->uuid('id_divisi','36');
            $table->string('nama','100');
            $table->string('jabatan','100');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('email','100');
            $table->string('password','255');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
