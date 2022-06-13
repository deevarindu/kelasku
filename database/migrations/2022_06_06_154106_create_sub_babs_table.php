<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubBabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_babs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bab')->unsigned();
            $table->foreign('id_bab')
              ->references('id')->on('babs');
            $table->string('judul_sub_bab');
            $table->text('isi_sub_bab');
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
        Schema::dropIfExists('sub_babs');
    }
}
