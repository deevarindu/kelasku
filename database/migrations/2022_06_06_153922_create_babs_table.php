<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('babs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mapel');
            $table->foreign('id_mapel')
              ->references('id')->on('mapels');
            $table->string('judul_bab');
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
        Schema::dropIfExists('babs');
    }
}
