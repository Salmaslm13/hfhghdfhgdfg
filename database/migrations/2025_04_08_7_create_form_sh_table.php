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

        Schema::create('form_sh', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->enum('skalaUsaha', ["Mikro Kecil","Menengah","Besar"]);
            $table->unsignedBigInteger('id_produk')->index();
            $table->foreign('id_produk')->references('id')->on('produk_sh');
            $table->unsignedBigInteger('id_jenisProduk')->index();
            $table->foreign('id_jenisProduk')->references('id')->on('jenis_produk');
            $table->integer('jumlahProduk');
            $table->text('lokasiUsaha');
            $table->string('noHP',20);
            $table->string('email',30);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_sh');
    }
};
