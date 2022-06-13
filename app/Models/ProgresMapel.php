<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Mapel;

class ProgresMapel extends Model
{
  protected $table = "progres_mapels";
  protected $fillable = [
    'id_siswa',
    'id_mapel',
    'progres'
  ];

  public function siswa(){
    return $this->belongsTo(Siswa::class);
  }

  public function mapel(){
    return $this->belongsTo(Mapel::class);
  }
}
