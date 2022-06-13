<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Soal;

class Nilai extends Model
{
  protected $table = "nilais";
  protected $fillable = [
    'id_siswa',
    'id_soal',
    'nilai'
  ];

  public function siswa(){
    return $this->belongsTo(Siswa::class);
  }

  public function soal(){
    return $this->belongsTo(Soal::class);
  }
}
