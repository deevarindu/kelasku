<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Mapel extends Model
{
  protected $table = "mapels";
  protected $fillable = [
    'nama_mapel',
    'id_kelas',
  ];

  public function kelas(){
    return $this->belongsTo(Kelas::class);
  }
}
