<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Mapel;

class Kelas extends Model
{
  protected $table = "kelases";
  protected $fillable = [
    'kelas'
  ];

  public function siswa(){
    return $this->hasMany(Siswa::class);
  }

  public function mapel(){
    return $this->hasMany(Mapel::class);
  }
}
