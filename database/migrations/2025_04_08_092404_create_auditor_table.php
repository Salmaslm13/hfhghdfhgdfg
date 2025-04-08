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

        Schema::create('auditor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Program')->index();
            $table->foreign('id_Program')->references('id')->on('program');
            $table->string('nama',50);
            $table->string('nik',20);
            $table->string('fotoKtp');
            $table->string('agama',20);
            $table->enum('gender', ["Laki-laki","Perempuan"]);
            $table->date('tanggalLahir');
            $table->text('alamat');
            $table->string('kab/kota',30);
            $table->enum('pendidikanTerakhir', ["S1","S2","S3"]);
            $table->string('noHP',20);
            $table->string('email',30);
            $table->string('jabatan',50);
            $table->string('jurusan',100);
            $table->string('ijazah');
            $table->string('cv');
            $table->string('pasFoto');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auditor');
    }
};
