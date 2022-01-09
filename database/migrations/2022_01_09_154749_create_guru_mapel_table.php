<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruMapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('guru_mapel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_guru_mapel');
            $table->unsignedBigInteger('id_mapel');
            $table->foreign('id_guru_mapel')->references('id')->on('guru');
            $table->foreign('id_mapel')->references('id')->on('mata_pelajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru_mapel');
    }
}
