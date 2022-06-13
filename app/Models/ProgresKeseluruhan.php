<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class ProgresKeseluruhan extends Model
{
  protected $table = "progres_keseluruhans";
  protected $fillable = [
    'id_siswa',
    'progres'
  ];

  public function siswa(){
    return $this->belongsTo(Siswa::class);
  }
}
