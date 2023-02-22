<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('mapel_uuid');
            $table->foreign('mapel_uuid')->references('uuid')->on('mapels');
            $table->uuid('hari_uuid');
            $table->foreign('hari_uuid')->references('uuid')->on('haris');
            $table->string('mulai')->nullable();
            $table->string('berakhir')->nullable();
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
        Schema::dropIfExists('jadwals');
    }
}
