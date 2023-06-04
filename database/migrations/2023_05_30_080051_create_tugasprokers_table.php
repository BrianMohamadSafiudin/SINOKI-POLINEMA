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
            $table->string('namatugas')->nullable()->unique();
            $table->string('sie')->nullable()->unique();
            $table->date('tenggatwaktu');
            $table->string('status')->nullable()->default('Belum Selesai');
            $table->string('evaluasi')->nullable();
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
