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
        Schema::disableForeignKeyConstraints();

        Schema::create('program', function (Blueprint $table) {
            $table->id();
            $table->string('namaProgram',50);
            $table->enum('metode', ["Online (Via Zoom)","Offline (Tatap Muka)"]);
            $table->integer('harga');
            $table->enum('status', ["Aktif","Nonaktif"]);
            $table->boolean('ujiKompetensi');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program');
    }
};
