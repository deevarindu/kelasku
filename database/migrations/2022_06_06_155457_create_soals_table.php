<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sub_bab');
            $table->foreign('id_sub_bab')
              ->references('id')->on('sub_babs');
            $table->text('soal1');
            $table->text('jawaban1');
            $table->text('soal2');
            $table->text('jawaban2');
            $table->text('soal3');
            $table->text('jawaban3');
            $table->text('soal4');
            $table->text('jawaban4');
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
        Schema::dropIfExists('soals');
    }
}
