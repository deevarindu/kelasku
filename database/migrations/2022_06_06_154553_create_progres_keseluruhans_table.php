<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgresKeseluruhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progres_keseluruhans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prog_mapel');
            $table->foreign('id_prog_mapel')
              ->references('id')->on('progres_mapels');
            $table->integer('progres');
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
        Schema::dropIfExists('progres_keseluruhans');
    }
}
