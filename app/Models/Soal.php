<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubBab;

class Soal extends Model
{
  protected $table = "soals";
  protected $fillable = [
    'soal1',
    'jawaban1',
    'soal2',
    'jawaban2',
    'soal3',
    'jawaban3',
    'soal4',
    'jawaban4',
    'id_sub_bab',
  ];

  public function subbab(){
    return $this->belongsTo(SubBab::class);
  }
}
