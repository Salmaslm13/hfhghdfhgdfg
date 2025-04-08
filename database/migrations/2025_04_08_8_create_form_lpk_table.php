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

        Schema::create('form_lpk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Program')->index();
            $table->foreign('id_Program')->references('id')->on('program');
            $table->string('nama',50);
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
        Schema::dropIfExists('form_lpk');
    }
};
