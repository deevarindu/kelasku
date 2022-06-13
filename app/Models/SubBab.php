<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bab;

class SubBab extends Model
{
  protected $table = "sub_babs";
  protected $fillable = [
    'judul_sub_bab',
    'isi_sub_bab',
    'id_bab',
  ];

  public function bab(){
    return $this->belongsTo(Bab::class);
  }

  public function soal(){
    return $this->hasMany(Soal::class);
  }
}
