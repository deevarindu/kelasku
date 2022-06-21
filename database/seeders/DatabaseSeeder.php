<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // Siswa::factory(3)->create();

      DB::table('siswas')->insert([
        'nama' => 'Aisyah Nadhira',
        'kelas' => '7',
        'email' => 'aisahndir@gmail.com',
        'password' => Hash::make('123456'),
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Deeva Rindu Wijarista Putri',
        'kelas' => '8',
        'email' => 'deevabcd@gmail.com',
        'password' => Hash::make('123456'),
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Kevin Benaya Sava Nugraha',
        'kelas' => '9',
        'email' => 'kepin@gmail.com',
        'password' => Hash::make('123456'),
      ]);

      DB::table('mapels')->insert([
        'kelas' => 7,
        'nama_mapel' => 'Bahasa Indonesia',
      ]);
      DB::table('mapels')->insert([
        'kelas' => 7,
        'nama_mapel' => 'Ilmu Pengetahuan Sosial',
      ]);
      DB::table('mapels')->insert([
        'kelas' => 7,
        'nama_mapel' => 'Matematika',
      ]);
      DB::table('mapels')->insert([
        'kelas' => 8,
        'nama_mapel' => 'Bahasa Indonesia',
      ]);
      DB::table('mapels')->insert([
        'kelas' => 8,
        'nama_mapel' => 'Ilmu Pengetahuan Sosial',
      ]);
      DB::table('mapels')->insert([
        'kelas' => 8,
        'nama_mapel' => 'Matematika',
      ]);
      DB::table('mapels')->insert([
        'kelas' => 9,
        'nama_mapel' => 'Bahasa Indonesia',
      ]);
      DB::table('mapels')->insert([
        'kelas' => 9,
        'nama_mapel' => 'Ilmu Pengetahuan Sosial',
      ]);
      DB::table('mapels')->insert([
        'kelas' => 9,
        'nama_mapel' => 'Matematika',
      ]);
    }
}
