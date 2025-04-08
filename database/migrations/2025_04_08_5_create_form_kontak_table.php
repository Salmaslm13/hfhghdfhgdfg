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

        Schema::create('form_kontak', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori', ["Informasi Sertifikasi Halal","Pendaftaran Pelatihan","Kerja Sama \/ Kemitraan","Pengaduan \/ Komplain","Permintaan Narasumber \/ Pemateri","Konsultasi Produk Halal","Lainnya"]);
            $table->string('nama',50);
            $table->string('noHP',20);
            $table->string('email',30);
            $table->text('pesan');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_kontak');
    }
};
