<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mapel;
use App\Models\SubBab;

class Bab extends Model
{
  protected $table = "babs";
  protected $fillable = [
    'judul_bab',
    'id_mapel',
  ];

  public function mapel(){
    return $this->belongsTo(Mapel::class);
  }

  public function subbab(){
    return $this->hasMany(SubBab::class);
  }
}
