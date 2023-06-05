<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programkerjas', function (Blueprint $table) {
            $table->id();
            $table->string('namaproker')->nullable()->unique();
            $table->string('bidang')->nullable();
            $table->string('tempat')->nullable();
            $table->date('tanggalproker');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programkerjas');
    }
};
