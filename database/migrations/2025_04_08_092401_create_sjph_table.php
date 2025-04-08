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

        Schema::create('sjph', function (Blueprint $table) {
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
            $table->enum('pendidikanTerakhir', ["SD","SMP","SMA\/SMK","D1","D2","D3","D4","S1","S2","S3"]);
            $table->string('noHP',20);
            $table->string('email',30);
            $table->string('namaUsaha',100);
            $table->enum('skalaUsaha', ["Belum punya usaha","Mikro kecil","Menengah","Besar"]);
            $table->string('jabatan', 50);
            $table->string('namaPerusahaan',100);
            $table->text('alamatPerusahaan');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sjph');
    }
};
