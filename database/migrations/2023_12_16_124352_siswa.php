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
        //Data siswa skate junior
        {
            Schema::create('siswa', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->integer('umur');
                $table->string('alamat');
                $table->integer('nomor_telepon');
                $table->text('email')->unique();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
            Schema::dropIfExists('siswa');
    }
};
