<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruang_kelas', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('tingkat_uuid');
            $table->foreign('tingkat_uuid')->references('uuid')->on('tingkats');
            $table->string('jurusan_uuid')->nullable();
            $table->foreign('jurusan_uuid')->references('uuid')->on('jurusans');
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
        Schema::dropIfExists('ruang_kelas');
    }
}
