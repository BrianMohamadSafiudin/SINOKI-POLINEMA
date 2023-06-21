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
        Schema::create('tugasprokers', function (Blueprint $table) {
            $table->id();
            $table->string('namatugas')->nullable();
            $table->string('sie')->nullable();
            $table->date('tenggatwaktu');
            $table->string('status')->nullable()->default('Belum Selesai');
            $table->string('evaluasi')->nullable();
            $table->string('file')->nullable();
            $table->string('idProker');
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
        Schema::dropIfExists('tugasprokers');
    }
};
