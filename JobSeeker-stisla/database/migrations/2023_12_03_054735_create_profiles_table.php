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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id('profileId');
            $table->string('nama');
            $table->enum('role', ['admin', 'user', 'employer']);
            $table->string('foto_profil');
            $table->string('email');
            $table->string('nomor_telp');
            $table->integer('umur');
            $table->string('gender');
            $table->text('riwayat_studi');
            $table->text('desc_self');
            $table->text('skill');
            $table->text('certificate');
            $table->unsignedBigInteger('userId');
            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
