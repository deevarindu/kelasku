<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Siswa extends Model
{
  protected $table = "siswas";
  protected $fillable = [
    'nama',
    'email',
    'password',
    'id_kelas',
  ];

  public function kelas(){
    return $this->belongsTo(Kelas::class);
  }
}
