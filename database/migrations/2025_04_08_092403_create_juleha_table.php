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

        Schema::create('juleha', function (Blueprint $table) {
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
            $table->string('jabatan',50);
            $table->enum('pengalaman', ["kurang 1 Tahun","2-5 Tahun","Lebih 5 Tahun"]);
            $table->string('namaPerusahaan',100);
            $table->text('alamatPerusahaan');
            $table->string('kab/kotaPerusahaan',30);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juleha');
    }
};
