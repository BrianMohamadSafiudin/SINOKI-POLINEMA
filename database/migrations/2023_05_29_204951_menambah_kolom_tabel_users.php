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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('nim')->unique()->nullable()->after('role');
            $table->string('prodi')->nullable()->after('nim');
            $table->string('jurusan')->nullable()->after('prodi');
            $table->string('sie')->nullable();
            $table->string('image')->nullable();
            $table->string('namaOki')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nim');
            $table->dropColumn('prodi');
            $table->dropColumn('jurusan');
            $table->string('sie')->nullable();
            $table->string('image')->nullable();
            $table->string('namaOki')->nullable();
        });
    }
};
