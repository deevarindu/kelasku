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

      // SISWAS
      // DB::table('siswas')->insert([
      //   'nama' => 'Aisyah Nadhira',
      //   'kelas' => '7',
      //   'email' => 'aisahndir@gmail.com',
      //   'password' => Hash::make('123456'),
      // ]);
      // DB::table('siswas')->insert([
      //   'nama' => 'Deeva Rindu Wijarista Putri',
      //   'kelas' => '8',
      //   'email' => 'deevabcd@gmail.com',
      //   'password' => Hash::make('123456'),
      // ]);
      // DB::table('siswas')->insert([
      //   'nama' => 'Kevin Benaya Sava Nugraha',
      //   'kelas' => '9',
      //   'email' => 'kepin@gmail.com',
      //   'password' => Hash::make('123456'),
      // ]);

      // MAPELS
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

      // BABS BAHASA INDONESIA
      DB::table('babs')->insert([
        'id_mapel' => 1,
        'judul_bab' => 'Bab 1',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 1,
        'judul_bab' => 'Bab 2',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 1,
        'judul_bab' => 'Bab 3',
      ]);

      DB::table('babs')->insert([
        'id_mapel' => 4,
        'judul_bab' => 'Bab 1',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 4,
        'judul_bab' => 'Bab 2',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 4,
        'judul_bab' => 'Bab 3',
      ]);

      DB::table('babs')->insert([
        'id_mapel' => 7,
        'judul_bab' => 'Bab 1',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 7,
        'judul_bab' => 'Bab 2',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 7,
        'judul_bab' => 'Bab 3',
      ]);

      // BABS IPS
      DB::table('babs')->insert([
        'id_mapel' => 2,
        'judul_bab' => 'Bab 1',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 2,
        'judul_bab' => 'Bab 2',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 2,
        'judul_bab' => 'Bab 3',
      ]);

      // BABS MATEMATIKA
      DB::table('babs')->insert([
        'id_mapel' => 3,
        'judul_bab' => 'Bab 1',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 3,
        'judul_bab' => 'Bab 2',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 3,
        'judul_bab' => 'Bab 3',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 3,
        'judul_bab' => 'Bab 4',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 3,
        'judul_bab' => 'Bab 5',
      ]);

      DB::table('babs')->insert([
        'id_mapel' => 6,
        'judul_bab' => 'Bab 1',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 6,
        'judul_bab' => 'Bab 2',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 6,
        'judul_bab' => 'Bab 3',
      ]);

      DB::table('babs')->insert([
        'id_mapel' => 9,
        'judul_bab' => 'Bab 1',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 9,
        'judul_bab' => 'Bab 2',
      ]);
      DB::table('babs')->insert([
        'id_mapel' => 9,
        'judul_bab' => 'Bab 3',
      ]);

      // SUBBABS BAHASA INDONESIA KELAS 7

      DB::table('sub_babs')->insert([
        'id_bab' => 1,
        'judul_sub_bab' => 'Bercerita',
        'isi_sub_bab' => '<div>Langkah-langkah menyimpulkan isi berita adalah memahami isi berita dengan menjawab singkat
                               dan tepat pertanyaan-pertanyaan berikut.
                          </div>
                            <ol>
                              <li>Apa yang terjadi? (what)</li>
                              <li>Siapa yang terlibat? (who)</li>
                              <li>Di mana terjadinya? (where)</li>
                              <li>Mengapa terjadi? (why)</li>
                              <li>Bagaimana kejadiannya? (how)</li>
                            </ol>
                            <div>
                              <br>
                            </div>
                            <div>Membaca memindai merupakan cara menemukan informasi dan bacaan
                                  (kamus, indeks, ensiklopedi, yellow pages, atau buku telepon dengan melihat halaman demi
                                  halaman dan berhenti pada bagian yang dimaksud.
                            </div>
                            <div>Untuk bercerita dengan baik, ada beberapa hal yang diperhatikan.</div>
                            <ol>
                              <li>Cerita runtut,</li>
                              <li>Lafal jelas dan tepat,</li>
                              <li>Intonasi tepat,</li>
                              <li>Gestur tepat dan berguna.</li>
                            </ol>
                            <div><strong>Ciri-ciri pantun:</strong></div>
                            <ol>
                              <li>setiap bait terdiri atas 4 baris,</li>
                              <li>setiap baris terdiri atas 8–12 suku kata,</li>
                              <li>&nbsp;bunyi akhir setiap baris (rima) bersajak a b a b,</li>
                              <li>baris 1 dan 2 merupakan sampiran, baris 3 dan 4 merupakan isi.</li>
                            </ol>
                            <div><br></div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 1,
        'judul_sub_bab' => 'Pertunjukan',
        'isi_sub_bab' => '<div>Hal-hal yang harus diperhatikan dalam menceritakan pengalaman antara lain sebagai berikut.</div>
                          <ul>
                            <li>Menggunakan pilihan kota/diksi yang tepat.</li>
                            <li>Menggunakan kalimat efektif dan menarik.</li>
                          </ul>
                          <div>Langkah-langkah menceritakan pengalaman pribadi.</div>
                          <ol>
                            <li>Mengingat-ingat secara detail/terperinci pengalaman yang paling mengesankan.</li>
                            <li>Menulis kata-kata kunci untuk mempermudah merangkai alur cerita.</li>
                            <li>Menguraikan kejadian serta terperinci dan lengkap.</li>
                            <li>Menggunakan diksi yang tepat.</li>
                            <li>Menggunakan kalimat yang efektif dan menarik.</li>
                          </ol>
                          <div>Pengalaman-pengalaman pribadi yang mengesankan dapat kamu tuangkan dalam buku harian dengan
                               pengungkapan dan bahasa yang baik dan benar.</div>
                          <div>Hal-hal yang harus diperhatikan dalam menceritakan kembali cerita anak.</div>
                          <ol>
                            <li>Judul cerita.</li>
                            <li>Hal-hal yang menarik dari cerita.</li>
                            <li>Hal-hal yang tidak menarik dari cerita.</li>
                            <li>Tokoh-tokoh dalam cerita.</li>
                            <li>Watak para tokoh.</li>
                            <li>Runtutan/akhir cerita.</li>
                            <li>Konflik dalam cerita.</li>
                            <li>Penyelesaian dalam cerita.</li>
                          </ol>
                          <div>Dalam menceritakan kembali cerita anak, hendaknya kamu menggunakan pilihan kata yang tepat dan
                               gaya yang menarik.</div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 1,
        'judul_sub_bab' => 'Pengalaman yang Mengesankan',
        'isi_sub_bab' => '<div>Membaca cepat adalah membaca dengan teknik cepat tanpa mengurangi pemahaman terhadap isi bacaan.</div>
                          <div>Hal-hal yang harus diperhatikan dalam membaca cepat antara lain:</div>
                          <ul>
                            <li>metode jarak mata (memperluas jangkauan mata dan mengurangi regresi),</li>
                            <li>menghilangkan kebiasaan membaca dengan bersuara,</li>
                            <li>meningkatkan kosentrasi.</li>
                          </ul>
                          <div>Surat pribadi merupakan surat yang ditulis untuk kepentingan pribadi.
                               Isi surat berupa bentuk ungkapan perasaan pribadi yang dituangkan dalam bahasa tulis.
                               Bahasa surat hendaknya mudah dipahami, sopan, ramah, dan sistematis.
                          </div>
                          <div>Sistematika surat pribadi terbagi ke dalam bagian pendahuluan, bagian isi, dan bagian penutup.</div>
                          <div>Dongeng termasuk dalam salah satu bentuk sastra lama yang disebarkan secara lisan dan
                               tidak diketahui siapa pengarangnya (anonim). Dongeng dapat dipahami dari tema dongeng dan hal-hal menarik
                               dari dongeng tersebut.</div><div>Bercerita dengan alat peraga bertujuan untuk memudahkan pendengar
                               memahami hal/petunjuk yang rumit.
                          </div>
                          <div>Hal-hal yang perlu diperhatikan dalam bercerita dengan alat peraga.</div>
                          <ul>
                            <li>Alat peraga sesuai dengan cerita.</li>
                            <li>Alat peraga hendaknya mempermudah pemahaman pendengar/penonton.</li>
                            <li>Tentukan alat peraga sesuai dengan kebutuhan.</li>
                            <li>Peragakan alat peraga sesuai dengan alur cerita.</li>
                          </ul>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 2,
        'judul_sub_bab' => 'Kegiatan',
        'isi_sub_bab' => '<div>Intonasi adalah kuat lemahnya tekanan suara ketika membaca.</div>
                          <div>Hal-hal yang harus diperhatikan dalam menyampaikan pengumuman secara lisan.</div>
                          <ul>
                            <li>Mengucapkan lafal dengan tepat.</li>
                            <li>Menggunakan intonasi dengan tepat.</li>
                            <li>Menggunakan kalimat yang lugas dan sederhana.</li>
                          </ul>
                          <div>Dongeng merupakan cerita prosa yang bersifat khayalan. Berkembang sebagai sastra lisan yang
                               bersifat anonim. Dongeng mulai disampaikan secara tertulis setelah masyarakat mengenal tulisan.
                          </div>
                          <div>Langkah-langkah menulis kembali isi dongeng yang sudah dibaca/didengarkan&nbsp; antara lain
                               sebagai berikut.</div>
                          <ol>
                            <li>Dengarkan pembacaan dongeng, kemudian bacalah kembali dengan saksama dan teliti!</li>
                            <li>Catatlah hal-hal penting dalam dongeng!</li>
                            <li>Perhatikan alur, tokoh, latar, karakter tokoh, dan unsur pendukung lainnya!</li>
                            <li>Tulislah isi dongeng dengan menggunakan bahasamu sendiri!&nbsp;</li>
                          </ol>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 2,
        'judul_sub_bab' => 'Perilaku',
        'isi_sub_bab' => '<div>Pokok-pokok berita dapat ditemukan dengan menganalisis pertanyaan-pertanyaan berikut.</div>
                          <ul>
                            <li>Peristiwa apa yang terjadi?</li>
                            <li>Siapa pelaku dalam peristiwa tersebut?</li>
                            <li>Di mana tempat terjadinya peristiwa?</li><li>Kapan waktu terjadinya peristiwa?</li>
                            <li>Apa penyebab kejadian tersebut?</li><li>Bagaimana proses terjadinya peristiwa?</li>
                          </ul>
                          <div>Pengumuman merupakan pemberitahuan tentang sesuatu kepada khalayak.
                               Hal-hal pokok dalam pengumuman.</div>
                          <ul>
                            <li>Pengumuman ditujukan kepada siapa.</li>
                            <li>Maksud/isi pengumuman.</li>
                            <li>Asal pengumuman.</li>
                          </ul>
                          <div>Hal-hal yang perlu diperhatikan dalam menyusun pengumuman.</div>
                          <ol>
                            <li>Bentuk/model pengumuman harus menarik.</li>
                            <li>Bahasa yang digunakan jelas dan persuasif (membujuk).</li>
                            <li>Maksud/isi mudah dipahami.</li>
                            <li>Khalayak yang dituju dinyatakan secara eksplisit (terang-terangan).</li>
                          </ol><div>Hal-hal yang perlu diperhatikan dalam mengomentari buku cerita:</div>
                          <ol>
                            <li>tema yang diangkat,</li>
                            <li>penokohan dan perwatakan tokoh,</li>
                            <li>kelemahan-kelemahan isi buku, dan</li>
                            <li>kelebihan-kelebihan isi buku.</li>
                          </ol>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 2,
        'judul_sub_bab' => 'Cita-Cita',
        'isi_sub_bab' => '<div>Wawancara adalah proses dialog antara orang yang mencari informasi dengan narasumber.</div>
                          <div>Narasumber merupakan orang yang mempunyai kemampuan lebih dalam bidang tertentu/ahli/pakar.</div>
                          <div>Sebelum kamu menceritakan tokoh idolamu, perhatikan langkah-langkah berikut!</div>
                          <ol>
                            <li>carilah data-data dan identitas tentang tokoh idolamu!</li>
                            <li>tulislah tema yang menurutmu paling menarik dari tokoh idolamu.</li>
                          </ol>
                          <div>Sebelum menulis riwayat hidup tokoh idolamu, data-data yang perlu kamu cari antara lain:</div>
                          <ul>
                            <li>prestasi daslam bidangnya</li>
                            <li>perilaku/sikap dalam bergaul</li>
                            <li>keistimewaan tokoh</li>
                            <li>prestasi yang membanggakan untuk bangsa dan negara</li>
                          </ul>
                          <div>Hal-hal yang perlu diperhatikan dalam menulis puisi adalah:</div>
                          <ol>
                            <li>gaya bahasa</li>
                            <li>diksi/pilihan kata</li>
                            <li>irama</li>
                            <li>Langkah-langkah menulis puisi:</li>
                            <li>pilih objek inspirasi!</li>
                            <li>ungkapkan perasaan dengan kata-kata yang kamu suka!</li>
                            <li>susun kata-kata tersebut menjadi baik!</li>
                            <li>baca dan hayati kata-kata yang kamu pilih!</li>
                          </ol>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 2,
        'judul_sub_bab' => 'Kerja Keras',
        'isi_sub_bab' => '<div>Membaca intensif adalah membaca sebuah teks bacaan secara mendalam untuk memperoleh pemahaman
                               mengenai isi teks bacaan tersebut.</div>
                          <div>Gagasan utama merupakan pikiran utama yang dikembangkan sehingga menjadi teks bacaan.</div>
                          <div>Untuk mengubah teks wawancara menjadi narasi kamu harus mengubah kalimat langsung menjadi
                               kalimat tidak langsung.</div>
                          <div>Nada, irama, dan diksi dalam puisi mencerminkan isi dari puisi itu sendiri.</div>
                          <div>Menulis puisi diawali dengan pencarian ide/gagasan melalui objek-objek yang bisa
                               menciptakan inspirasi. Ide tersebut kemudian diungkapkan dengan bahasa yang padat, indah, dan sarat makna.&nbsp;</div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 3,
        'judul_sub_bab' => 'Mengungkapkan Pendapat dan Imajinasi',
        'isi_sub_bab' => '<div>Wawancara merupakan percakapan tanya jawab yang dilakukan oleh&nbsp;
                               dua orang atau lebih tentang suatu tema antara penanya dan narasumber.</div>
                          <div>Penanya adalah pewawancara yang mencari/menanyakan informasi dari tema yang dibicarakan.</div>
                          <div>Narasumber adalah orang yang diwawancarai/memberikan informasi. Narasumber biasanya seorang
                               profesional, ahli, tokoh, atau pakar dalam tema yang sedang dibicarakan.</div>
                          <div>Untuk dapat menuliskan hal-hal penting dari wawancara yang kamu dengar, perhatikan 2 hal berikut ini!</div>
                          <ol>
                            <li>pertanyaan apa yang diajukan oleh penanya, dan</li>
                            <li>jawaban narasumber mengenai pertanyaan tersebut.</li>
                          </ol>
                          <div>Biografi merupakan catatan riwayat hidup seorang tokoh yang ditulis dalam bentuk buku.</div>
                          <div>Ciri-ciri cerpen:</div>
                          <ol>
                            <li>panjang cerita tidak lebih dari 10.000 kata,</li>
                            <li>mengandung satu gagasan utama,</li>
                            <li>menyajikan kejadian yang paling menarik, dan</li>
                            <li>berakhir dengan penyelesaian.</li>
                          </ol>
                          <div>Hal-hal yang dinilai dalam menanggapi cara pembacaan cerpen antara lain:</div>
                          <ol>
                            <li>power/kekuatan vokal,</li>
                            <li>intonasi,</li>
                            <li>pelafalan,</li>
                            <li>interpretasi,</li>
                            <li>teknik representatif/teknik pembacaan, dan</li>
                            <li>penampilan umum.</li>
                          </ol>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 3,
        'judul_sub_bab' => 'Tokoh Idola',
        'isi_sub_bab' => '<div>Tabel atau diagram merupakan alat pelengkap yang akan memudahkan kita untuk menemukan informasi secara tepat dan cepat.</div>
                          <div>Tabel merupakan daftar berisi ikhtisar data atau informasi yang tersusun urut ke bawah
                               dalam lajur dan deret tertentu dengan garis pembatas.</div>
                          <div>Diagram merupakan sketsa untuk menunjukkan atau menerangkan sesuatu.
                               Data disampaikan melalui gambar.</div>
                          <div>Bentuk-bentuk diagram antara lain
                               diagram gambar, diagram lingkaran, diagram batang, dan diagram pohon.</div>
                          <div>Memo merupakan surat dinas yang isinya singkat dan dipakai secara intern dalam
                               suatu instansi atau lembaga. Memo ini bersifat resmi.
                               Pesan singkat yang tidak resmi biasanya digunakan dalam komunikasi keluarga.</div>
                          <div>Latar cerpen merupakan kondisi yang melatarbelakangi cerita dalam cerpen.
                               Latar ini meliputi latar tempat, latar waktu, dan latar suasana.
                               Latar dapat diambil dari khasanah imajinasi pengarang atau realitas sosial di lingkungan
                               sekitar.</div>
                          <div>Agar intonasi membaca teks perangkat upacara tepat, usahakan penjedaan dalam membaca juga tepat.</div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 3,
        'judul_sub_bab' => 'Sosial dan Budaya',
        'isi_sub_bab' => '<div>Hal-hal yang perlu diperhatikan dalam percakapan melalui telepon adalah:</div>
                          <ol>
                            <li>penggunaan kalimat yang efektif dan</li>
                            <li>penggunaan bahasa yang santun.</li>
                          </ol>
                          <div>Hal-hal yang harus diperhatikan dalam membaca/menanggapi pembacaan puisi:</div>
                          <div>irama, yaitu tinggi rendahnya suara;</div>
                          <ol>
                            <li>volume, yaitu kuat lemah, dan keras bentuknya suara;</li>
                            <li>mimik, yaitu ekspresi wajah; serta</li>
                            <li>kinesik, yaitu gerak kecil-kecil dari tangan atau wajah.</li>
                          </ol>'
      ]);


    // SUBBAB BAHASA INDONESIA KELAS 8

      DB::table('sub_babs')->insert([
        'id_bab' => 18,
        'judul_sub_bab' => 'Hiburan',
        'isi_sub_bab' => "<div>Wawancara terdiri atas dua jenis yaitu wawancara ragam formal dan wawancara ragam tidak formal. Berdasarkan ragam tersebut, kamu dapat membuat pertanyaan sesuai dengan konteks dan situasi<br><br>Laporan yang telah kamu pelajari adalah laporan dalam bentuk berita. Membuat laporan sama halnya seperti menyajikan berita. Dalam menganalisis laporan berita harus diperhatikan aspek: apa, siapa, di mana, kapan, mengapa, dan bagaiamana kejadian tersebut<br><br>Kunci keberhasilan menulis petunjuk, yaitu memerhatikan sistematika penulisan, kejelasan kalimat, dan ketepatan informasi. Ketiga hal tersebut dimaksudkan agar petunjuk yang kamu buat mudah dipahami.<br><br>Saat mengidentifikasi unsur drama, kamu harus memerhatikan keseluruhan isi cerita atau unsur intrinsik, yang terdiri atas dialog, alur, tokoh, latar, tema, dan amanat.</div><div><br></div>",
            "created_at" => "2022-06-24T15:02:49.000000Z",
            "updated_at" => "2022-06-24T15:02:49.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 18,
        'judul_sub_bab' => 'Pendidikan',
        'isi_sub_bab' => '<div>1.	Pada Pelajaran 1 Bagian B, kamu telah belajar menganalisis isi laporan. Mengisi laporan berbeda dengan menganalisis laporan, demikian pula saat menanggapinya.
                                  Saat menanggapi isi laporan, kamu harus memilih pendapat yang disusun berdasarkan hasil analisis</div>
                          <div>2.	Membaca memindai adalah kegiatan membaca yang bertujuan mencari informasi baik itu makna secara cepat.
                                  Informasi tersebut dapat diperoleh dari  kamus, indeks buku, ataupun buku telepon.</div>
                          <div>3.	Kegiatan menulis laporan tidak langsung dilakukan pada saat kamu mengobservasi objek, melainkan dilakukan sesudahnya.</div>
                          <div>4.	Saat bermain peran, hal terpenting adalah penghayatan terhadap tokoh yang kamu perankan.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 18,
        'judul_sub_bab' => 'Peristiwa',
        'isi_sub_bab' => '<div>1.	Laporan lisan perlu memperhatikan sistematika penyampaian yang terdiri dari urutan ruang, waktu, dan topik berita.</div>
                          <div>2.	Saat ingin menemukan tempat atau arah, kamu harus berpatokan pada tempat sekarang kamu berada.</div>
                          <div>3.	Menanggapi unsur pementasan drama harus meliputi unsur gerak yang terdiri dari ekspresi wajah, ekspresi tangan, dan ekspresi tubuh.
                                  Selain unsur gerak, ada juga unsur panggung, dan unsur setting serta pencahayaan.</div>
                          <div>4.	Dalam penulisan sebuah naskah drama, terlebih dahulu, kamu harus menentukan tema.
                                  Lalu selanjutnya kamu harus menentukan penokohan dan perwatakan, dialog dan latar serta yang terakhir adalah waktu.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 19,
        'judul_sub_bab' => 'Peristiwa',
        'isi_sub_bab' => '<div>1.	Hal utama yang harus diperhatikan saat kamu membaca cepat adalah pergerakan bola matamu.
                                  Saat membaca cepat lehermu jangan ikut bergerak, karena cukup mata saja yang mengikuti tulisan.</div>
                          <div>2.	Dalam evaluasi pemeranan tokoh drama, dialog-dialog yang diucapkan tokoh-tokoh akan menjadi pusat perhatian.
                                  Penghayatan dialog, gestur, dan kesesuaian postur tubuh menjadi hal penting yang harus kamu perhatikan.</div>
                          <div>3.	Menulis naskah drama berdasarkan kaidah penulisan naskah drama berbeda dengan menulis naskah drama berdasarkan keaslian ide. Menulis naskah drama berdasarkan kaidah penulisan naskah drama, biasanya mengadaptasi dari naskah drama yang sudah ada.
                                  Penulisan naskah drama berdasarkan keaslian ide biasanya menyadur cerpen dan novel atau karangan sendiri.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 19,
        'judul_sub_bab' => 'Kegiatan',
        'isi_sub_bab' => '<div>1.	Dalam pembelajaran penulisan surat dinas, terlebih dahulu kamu harus membedakan tata cara menulis surat resmi dan surat tidak resmi.
                                  Setelah memahaminya, kamu akan mudah untuk menulis surat dinas ataupun jenis surat lainnya.</div>
                          <div>2.	Bermain drama dengan berimprovisasi, bukan berarti peranmu keluar dari ketentuan naskah.
                                  Bermain peran dengan berimprovisasi justru kamu harus bermain sesuai dengan kerangka naskah drama.</div>
                          <div>3.	Saat menulis sinopsis novel remaja, kamu harus memerhatikan poin-poin penting yang terkandung di dalamnya
                                  seperti tema, alur, dan amanat dan penokohan yang membawa alur sebuah novel.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 19,
        'judul_sub_bab' => 'Ilmu Pengetahuan Populer',
        'isi_sub_bab' => '<div>1.	Laporan merupakan suatu berita tentang peristiwa dengan memerhatikan aspek 5W + 1H.</div>
                          <div>2.	Kutipan novel berisi ringkasan, kometar tentang identitas novel, pengarang, penggunaan gaya bahasa, penokohan, pesan, kesan dan lain-lain.</div>
                          <div>3.	Membaca secara ekstensif dua bacaan yang berbeda  dengan topik yang sama tidak akan memengaruhi simpulan akhir berita.
                                  Hal tersebut dikarenakan isi permasalahan berita berbeda.</div>
                          <div>4.	Penulisan rangkuman buku berisi mengenai keseluruhan isi buku seperti sampul, halaman, isi, dan daftar pustaka.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 20,
        'judul_sub_bab' => 'Kegemaran',
        'isi_sub_bab' => '<div>1.	Dalam manjelaskan tema dan latar novel, kamu harus membaca dan mengidentifikasikan terlebih dahulu unsur intrinsik yang terdapat dalam novel.
                                  Dengan membaca keseluruhan isi cerita, kamu akan mudah mencari tema dan menjelaskannya.
                                  Berbeda dengan tema, latar dalam sebuah bacaan  seperti novel lebih mudah dipahami jika kamu membacanya dengan cermat.</div>
                          <div>2.	Kutipan sebuah novel merupakan gambaran umum mengenai isi dari novel tersebut. Kamu dapat mengomentari segi intrinsik maupun ekstrinsik.
                                  Dengan demikian, kamu dapat menilai kelebihan dan kelemahan novel tersebut.</div>
                          <div>3.	Membaca intensif adalah kegiatan membaca suatu teks bacaan secara teliti dan berulang-ulang.
                                  Hal tersebut dimaksudkan agar kamu selaku pembaca dapat lebih cepat dan tepat dalam memahami suatu teks bacaan.</div>
                          <div>4.	Saat menulis teks berita, kamu harus bertindak objektif.
                                  Dalam hal ini, kamu harus bersikap atau berada di pihak yang netral dan tidak memihak.
                                  Hal terpenting dalam penulisan berita adalah aspek 5W+1H.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 20,
        'judul_sub_bab' => 'Lingkungan Sekitar',
        'isi_sub_bab' => '<div>1.	Pengembangan alur cerita dalam sebuah novel biasanya dari pengenalan cerita, pengungkapan peristiwa, menuju pada konflik, puncak konflik dan yang terakhir adalah penyelesaian masalah.</div>
                          <div>2.	Pada dasarnya, perdebatan dalam sebuah diskusi merupakan hal yang wajar, selama proses perdebatan itu berjalan positif dan lancar untuk mencari solusi bersama.
                                  Dalam menyatukan pendapat, kamu juga harus memerhatikan pendapat orang lain.</div>
                          <div>3.	Saat membaca buku antologi puisi, kamu akan mengetahui gaya penulisan masing-masing penulis. Gaya penulisan seorang penyair pasti memiliki atau memuat kekhasan.</div>
                          <div>4.	Tujuan utama dari pembuatan poster atau slogan adalah untuk memengaruhi pembaca agar menuruti apa yang diinginkan pihak si pembuat.
                                  Isi slogan atau poster harus berisi hal-hal yang beguna bagi khalayak.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 20,
        'judul_sub_bab' => 'Kehidupan',
        'isi_sub_bab' => '<div>1.	Untuk mengidentifikasi karakter tokoh novel, kamu harus membaca dengan melibatkan diri kita secara emosional serta memberikan rasa empati dan rasa suka.</div>
                          <div>2.	Dalam menilai dan menjelaskan unsur-unsur sebuah novel, yang harus kamu lakukan adalah memerhatikan dari segi sisi cerita, tokoh, dan latar novel tersebut.</div>
                          <div>3.	Saat membawakan sebuah acara, kamu terlebih dahulu harus mengetahui jenis dan tujuan acara, peserta, dan kondisi kelangsungan acara.
                                  Setelah mengetahuinya, kamu akan mudah memandu acara tersebut.</div>
                          <div>4.	Saat menulis sebuah puisi, kamu harus menentukan tema puisi yang akan kamu buat, dan untuk siapa puisi tersebut. Setelah itu, kamu baru memikirkan isi dan rima.
                                  Dengan demikian puisi tersebut akan lebih baik dan terarah.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 20,
        'judul_sub_bab' => 'Kesenian',
        'isi_sub_bab' => '<div>1.	Berita adalah sajian informasi yang harus kita ikuti perkembangannya.
                                  Saat mendengar berita, kamu harus memerhatikan tanda intonasi agar tidak terjadi salah terima informasi saat kita mengemukakannya kembali.</div>
                          <div>2.	Sama halnya dengan mendengarkan berita, membacakan teks berita memerlukan tanda intonasi dan jeda yang tepat agar si penerima berita mudah memahaminya.</div>
                          <div>3.	Banyak hal yang menarik dari dua novel yang berbeda.
                                  Meskipun tema yang diemban terkadang sama tetapi sudut pandang penyajiannya berbeda.</div>
                          <div>4.	Menulis puisi bebas harus memerhatikan rambu-rambu penulisan, seperti rima.
                                  Rima dalam sebuah puisi memegang peranan penting dari estetika pendukung isi.</div>'
      ]);

      // SUBBAB BAHASA INDONESIA KELAS 9

      DB::table('sub_babs')->insert([
        'id_bab' => 21,
        'judul_sub_bab' => 'Kegiatan Kemanusiaan',
        'isi_sub_bab' => '<div>1.	Syair adalah salah satu jenis puisi lama yang berasal dari Persia (sekarang Iran) dan dibawa masuk ke Nusantara bersama-sama dengan kedatangan Islam.</div>
                          <div>2.	Daftar indeks berisi indeks nama (indeks pengarang), indeks topik, perincian indeks topik, dan nomor halaman di mana istilah atau nama tersebut berada.</div>
                          <div>3. Hal-hal yang harus dilakukan agar dapat memusikalisasi puisi secara baik, yakni
                                  menentukan puisi yang akan dimusikalisasi, mengapresiasi puisi yang telah ditentukan, memerhatikan kesusastraan isi puisi dengan suasana yang dibangun, menentukan alat musik yang akan digunakan untuk mengiringi musikalisasi puisi, dan menentukan notasi nada yang digunakan.</div>
                          <div>4. Kesalahan bahasa yang biasanya terdapat dalam sebuah tulisan berupa kesalahan penggunaan ejaan, tanda baca, pilihan kata (diksi), kalimat yang tidak efektif, dan paragraf yang kurang padu.</div>
                          <div>5.	Kata pun sebagai partikel ditulis terpisah dari kata yang mendahuluinya yang berarti juga atau jua.</div>
                          <div>6.	Kata seru atau interjeksi adalah kata tugas yang mengungkapkan rasa hati manusia.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 21,
        'judul_sub_bab' => 'Kesenian',
        'isi_sub_bab' => '<div>1.	Berita adalah sajian informasi yang harus kita ikuti perkembangannya.
                                  Saat mendengar berita, kamu harus memerhatikan tanda intonasi agar tidak terjadi salah terima informasi saat kita mengemukakannya kembali.</div>
                          <div>2.	Sama halnya dengan mendengarkan berita, membacakan teks berita memerlukan tanda intonasi dan jeda yang tepat agar si penerima berita mudah memahaminya.</div>
                          <div>3.	Banyak hal yang menarik dari dua novel yang berbeda.
                                  Meskipun tema yang diemban terkadang sama tetapi sudut pandang penyajiannya berbeda.</div>
                          <div>4.	Menulis puisi bebas harus memerhatikan rambu-rambu penulisan, seperti rima.
                                  Rima dalam sebuah puisi memegang peranan penting dari estetika pendukung isi.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 21,
        'judul_sub_bab' => 'Macam-Macam Peristiwa',
        'isi_sub_bab' => '<div>1.	Hal-hal yang harus diperhatikan dalam memberikan komentar terhadap pendapat narasumber dalam dialog interaktif yakni
                                  bahasa yang digunakan harus komunikatif, menggunakan kata dan kalimat yang baik dan lugas, dan komentar harus disertai alasan yang kuat dan contoh yang terdapat di masyarakat.</div>
                          <div>2.	Supaya orang lain memahami informasi yang kalian sampaikan secara lisan, kalian harus menggunakan bahasa
                                  yang komunikatif, menggunakan kata atau kalimat yang baik dan lugas, pokok permasalahannya (informasinya harus jelas), dan sesuai dengan situasi serta kondisi.</div>
                          <div>3.	Resensi adalah ulasan atau pembicaraan mengenai suatu karya baik itu buku, film, atau karya yang lain.</div>
                          <div>4.	Berdasarkan taraf integrasinya, unsur serapan dalam bahasa Indonesia dapat dibagi atas empat golongan besar yakni adopsi, adaptasi, terjemahan, dan kreasi.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 22,
        'judul_sub_bab' => 'Perkembangan Alat Komunikasi',
        'isi_sub_bab' => '<div>1.	Setiap puisi lama (tak terkecuali syair) terikat oleh beberapa hal seperti jumlah baris, jumlah bait, dan persajakan.</div>
                          <div>2. Dalam menceritakan kembali isi cerpen, unsur-unsur intrinsik dalam cerpen tersebut harus diuraikan secara jelas dan disertai dengan pengungkapan hal-hal yang menarik atau berkesan dalam cerpen tersebut.</div>
                          <div>3.	Iklan baris biasanya ditulis dengan menggunakan bahasa yang objektif, jujur, singkat, dan jelas.</div>
                          <div>4.	Ungkapan adalah kelompok kata atau gabungan kata yang menyatakan makna khusus (makna unsur-unsurnya seringkali menjadi kabur).
                                  Peribahasa adalah kelompok kata atau kalimat yang tetap susunannya, biasanya mengiaskan maksud tertentu.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 22,
        'judul_sub_bab' => 'Kegemaran Manusia',
        'isi_sub_bab' => '<div>1.	Isi dialog interaktif dapat kalian simpulkan setelah mendengarkan dengan saksama pelaksanaan dialog tersebut.</div>
                          <div>2.	Indeks nama berisi informasi tentang nama-nama tokoh yang berkaitan dengan isi buku tersebut.</div>
                          <div>3.	Langkah-langkah yang dapat kalian gunakan untuk menulis kembali cerpen yang pernah dibaca yaitu
                                  bacalah sebuah cerpen dengan saksama, tentukan ide-ide pokok cerpen sesuai dengan alur cerpen, dan kembangkan ide-ide pokok tersebut menjadi sebuah ringkasan cerpen.</div>
                          <div>4.	Kalimat inversi adalah kalimat yang bersusun balik atau berpola P – S.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 22,
        'judul_sub_bab' => 'Manusia dan Kebutuhannya',
        'isi_sub_bab' => '<div>1.	Tokoh utama dalam novel terbagi atas dua macam, yaitu tokoh protagonis dan tokoh antagonis. Tokoh protagonis yaitu tokoh utama yang mendukung jalannya cerita (biasanya berwatak baik).
                                  Ada pun tokoh antagonis yaitu tokoh yang mempunyai konflik dengan tokoh protagonis (biasanya berwatak jahat)..</div>
                          <div>2.	Diskusi merupakan kegiatan bertukar pikiran antara dua orang atau lebih.</div>
                          <div>3. Membaca ekstensif adalah suatu kegiatan membaca yang bertujuan membandingkan dua bacaan atau lebih agar diketahui persamaan dan perbedaan gagasan-gagasan penting yang ada di dalam bacaan-bacaan tersebut.</div>
                          <div>4.	Pada umumnya, susunan naskah pidato terdiri atas salam pembuka, pendahuluan, isi pokok, simpulan, harapan-harapan, dan penutup.</div>
                          <div>5. Singkatan adalah bentuk yang dipendekkan yang terdiri atas satu huruf atau lebih.
                                  Akronim adalah singkatan yang berupa gabungan huruf awal, gabungan suku kata, ataupun gabungan huruf dan suku kata dari deret kata yang diperlakukan sebagai kata.
                          </div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 23,
        'judul_sub_bab' => 'Kondisi Pertanian di Indonesia',
        'isi_sub_bab' => '<div>1.	Alur terdiri atas tiga macam yaitu alur maju, alur mundur, dan alur campuran.</div>
                          <div>2.	Ada empat macam metode dalam menyampaikan pidato, yakni metode impromtu, metode ekstemporan, metode menghafal, dan metode naskah.</div>
                          <div>3. Grafik adalah lukisan pasang surut suatu keadaan dengan garis atau gambar (tentang turun naiknya hasil, statistik, dan sebagainya).</div>
                          <div>4.	Morfofonemik adalah perubahan fonem yang terjadi sebagai akibat pertemuan morfem dengan morfem lain.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 23,
        'judul_sub_bab' => 'Kebersihan Lingkungan 1',
        'isi_sub_bab' => '<div>1.	Tujuan penyampaian pidato yaitu memotivasi, memersuasi, melakukan tindakan, menginformasikan, dan menghibur.</div>
                          <div>2. Latihan-latihan yang dapat dilakukan untuk melatih kemampuan drama yakni membaca puisi, menirukan binatang, menirukan orang, tertawa dan menangis, berdialog, gerak kerja panggung, serta bermain drama.</div>
                          <div>3. Membaca cepat merupakan salah satu kegiatan membaca yang menitikberatkan pada pemahaman gagasan pokok secara tepat dan berlangsung dalam waktu yang relatif singkat.</div>
                          <div>4. Kalimat majemuk setara yaitu kalimat majemuk yang terdiri atas dua klausa atau lebih yang dipadukan menjadi satu yang hubungan antarklausanya sejajar.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 23,
        'judul_sub_bab' => 'Minat Remaja terhadap Olahraga dan Pariwisata',
        'isi_sub_bab' => '<div>1. Ada beberapa hal yang perlu kalian perhatikan ketika memberikan komentar terhadap isi pidato, yaitu komentar harus disertai dengan alasan atau bukti yang logis dan disampaikan dengan bahasa yang santun.</div>
                          <div>2. Unsur-unsur dalam lakon drama terdiri atas tema, amanat, plot (alur), karakter (perwatakan), dialog, latar, bahasa, dan interpretasi.</div>
                          <div>3. Surat pembaca berisi waktu kejadian, lokasi kejadian, kronologis kejadian, saran dan kritik pada instansi terkait, dan identitas serta alamat penulis surat.</div>
                          <div>4. Kalimat majemuk bertingkat adalah satu kalimat utama yang di dalamnya ada sebuah klausa (satu kalimat utama yang di dalamnya ada dua klausa).</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 23,
        'judul_sub_bab' => 'Kesenian yang Berasal dari Indonesia',
        'isi_sub_bab' => '<div>1. Penggambaran watak tokoh dapat kalian ketahui melalui tiga cara yakni dari segi fisis, segi psikis, dan segi sosiologis.</div>
                          <div>2.	Kerangka karya tulis ilmiah minimal terdiri atas tiga bagian yakni pendahuluan, isi, dan penutup.</div>
                          <div>3.	Preposisi dari hanya dipakai untuk menyatakan asal, sedangkan preposisi daripada dipakai untuk menyatakan perbandingan.</div>'
      ]);


      // SUBBAB MATEMATIKA KELAS 7
      DB::table('sub_babs')->insert([
         "id_bab" => 7,
        "judul_sub_bab" => "Penjumlahan dan Pengurangan",
        "isi_sub_bab" => "<div>Bilangan bulat terdiri dari bilangan bulat negatif, nol, dan bilangan bulat positif.</div><div>&nbsp;</div><div>Sifat-sifat penjumlahan pada bilangan bulat.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Sifat tertutup<br>&nbsp;Untuk setiap bilangan bulat a dan b, berlaku<br>&nbsp;a + b = c dengan c juga bilangan bulat.</div><div>&nbsp;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Sifat komutatif<br>&nbsp;Untuk setiap bilangan bulat a dan b, selalu berlaku<br>&nbsp;a + b = b + a.</div><div>&nbsp;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Sifat asosiatif<br>&nbsp;Untuk setiap bilangan bulat a, b, dan c selalu berlaku<br>&nbsp;(a + b) + c = a + (b + c).</div><div>&nbsp;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Mempunyai unsur identitas<br>&nbsp;Untuk sebarang bilangan bulat a, selalu berlaku<br>&nbsp;a + 0 = 0 + a. Bilangan nol (0) merupakan unsur identitas pada penjumlahan.</div><div>&nbsp;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Mempunyai invers<br>&nbsp;Untuk setiap bilangan bulat a, selalu berlaku<br>&nbsp;a + (–a) = (–a) + a = 0. Invers dari a adalah –a, sedangkan invers dari –a adalah a.</div><div>&nbsp;</div><div>Jika a dan b bilangan bulat maka berlaku a – b = a + (–b).</div><div>&nbsp;</div><div>Operasi pengurangan pada bilangan bulat berlaku sifat tertutup.</div>",
        "created_at" => "2022-06-24T12:20:43.000000Z",
        "updated_at" => "2022-06-24T12:20:43.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 7,
        "judul_sub_bab" => "Perkalian dan Pembagian",
        "isi_sub_bab" => "<div>Jika p dan q bilangan bulat maka</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;p x q = pq;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;(–p) x q = –(p x q) = –pq;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;p x (–q) = –(p x q) = –pq;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;(–p) x&nbsp; (–q) = p x q = pq.</div><div>&nbsp;</div><div>Untuk setiap p, q, dan r bilangan bulat berlaku sifat tertutup terhadap operasi perkalian;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;komutatif: p x q = q x p;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;asosiatif: (p x q) x r = p x&nbsp; (q x r);</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;distributif perkalian terhadap penjumlahan: p x (q + r) = (p x q) + (p x r);</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;distributif perkalian terhadap pengurangan: p x (q – r) = (p x q) – (p x r).</div><div>&nbsp;</div><div>Unsur identitas pada perkalian adalah 1, sehingga untuk setiap bilangan bulat p berlaku p x&nbsp; 1 = 1 x p = p.</div><div>&nbsp;</div><div>Pembagian merupakan operasi kebalikan dari perkalian.</div><div>&nbsp;</div><div>Pada operasi pembagian bilangan bulat tidak bersifat tertutup.</div>",
        "created_at" => "2022-06-24T12:21:05.000000Z",
        "updated_at" => "2022-06-24T12:21:05.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 7,
        "judul_sub_bab" => "Kesimpulan",
        "isi_sub_bab" => "<div>Apabila dalam suatu operasi hitung campuran bilangan bulat tidak terdapat tanda kurung, pengerjaannya berdasarkan sifat-sifat operasi hitung berikut.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Operasi penjumlahan (+) dan pengurangan (–) sama kuat, artinya operasi yang terletak di sebelah kiri dikerjakan terlebih dahulu.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Operasi perkalian (x) dan pembagian (:) sama kuat, artinya operasi yang terletak di sebelah kiri dikerjakan terlebih dahulu.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Operasi perkalian (x) dan pembagian (:) lebih kuat daripada operasi penjumlahan (+) dan pengurangan (–), artinya operasi perkalian (x) dan pembagian (:) dikerjakan terlebih dahulu daripada operasi penjumlahan (+) dan pengurangan (–).</div>",
        "created_at" => "2022-06-24T12:21:48.000000Z",
        "updated_at" => "2022-06-24T12:21:48.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 8,
        "judul_sub_bab" => "Variabel, Konstanta, Faktor, Serta Suku Sejenis dan Tak Sejenis",
        "isi_sub_bab" => "<div>-&nbsp; &nbsp; &nbsp; &nbsp;Variabel adalah lambang pengganti suatu bilangan yang belum diketahui nilainya dengan jelas.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Konstanta adalah suku dari suatu bentuk aljabar yang berupa bilangan dan tidak memuat variabel.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Suku-suku sejenis adalah suku yang memiliki variabel dan pangkat dari masing-masing variabel yang sama.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Suku tak sejenis adalah suku yang memiliki variabel dan pangkat dari masing-masing variabel yang tidak sama.</div>",
        "created_at" => "2022-06-24T12:23:41.000000Z",
        "updated_at" => "2022-06-24T12:23:41.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 8,
        "judul_sub_bab" => "Operasi Hitung Aljabar",
        "isi_sub_bab" => "<div>Pada bentuk aljabar, operasi penjumlahan dan pengurangan hanya dapat dilakukan pada suku-suku yang sejenis.</div><div>&nbsp;</div><div>Perkalian suatu bilangan konstanta k dengan bentuk aljabar suku satu dan suku dua dinyatakan sebagai berikut.<br>&nbsp;k(ax) = kax<br>&nbsp;k(ax + b) = kax + kb</div><div>&nbsp;</div><div>Perkalian antara dua bentuk aljabar dinyatakan sebagai berikut.<br>&nbsp;(ax + b) (cx + d) = acx2 + (ad + bc)x + bd<br>&nbsp;(ax + b) (cx2 + dx + e) = acx3 + (ad + bc)x2 + (ae + bd)x + be (x + a) (x – a) = x2 – a</div><div>&nbsp;</div><div>Pada perpangkatan bentuk aljabar suku dua, koefisien sukusukunya ditentukan dengan segitiga Pascal.<br>&nbsp;(a + b)1 = a + b<br>&nbsp;(a + b)2 =a2 + 2ab +b2<br>&nbsp;(a + b)3 =a3 + 3a2b + 3ab2 + b3<br>&nbsp;dan seterusnya</div><div>&nbsp;</div><div>Nilai suatu bentuk aljabar dapat ditentukan dengan cara menyubstitusikan sebarang bilangan pada variabel-variabel bentuk aljabar tersebut.</div><div>&nbsp;</div><div>Suatu pecahan bentuk aljabar dikatakan paling sederhana jika pembilang dan penyebutnya tidak mempunyai faktor persekutuan kecuali 1 dan penyebutnya tidak sama dengan nol.</div><div>&nbsp;</div><div>Hasil operasi penjumlahan dan pengurangan pada pecahan aljabar diperoleh dengan cara menyamakan penyebutnya, kemudian menjumlahkan atau mengurangkan pembilangnya.</div>",
        "created_at" => "2022-06-24T12:24:17.000000Z",
        "updated_at" => "2022-06-24T12:24:17.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 9,
        "judul_sub_bab" => "Persamaan Satu Variabel",
        "isi_sub_bab" => "<div>Persamaan adalah kalimat terbuka yang dihubungkan oleh tanda sama dengan (=).</div><div>&nbsp;</div><div>Persamaan linear satu variabel adalah kalimat terbuka yang dihubungkan oleh tanda sama dengan (=) dan hanya mempunyai satu variabel berpangkat satu. Bentuk umum persamaan linear satu variabel adalah ax + b = 0 dan a ≠ 0.</div><div>&nbsp;</div><div>Penyelesaian persamaan linear adalah pengganti variabel x yang menyebabkan persamaan bernilai benar.</div><div>&nbsp;</div><div>Dua persamaan atau lebih dikatakan ekuivalen jika mempunyai himpunan penyelesaian yang sama dan dinotasikan dengan tanda “⇔”.</div><div>&nbsp;</div><div>Suatu persamaan dapat dinyatakan ke dalam persamaan yang ekuivalen dengan cara:</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Menambah atau mengurangi kedua ruas dengan bilangan yang sama;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Mengalikan atau membagi kedua ruas dengan bilangan yang sama.</div>",
        "created_at" => "2022-06-24T12:26:51.000000Z",
        "updated_at" => "2022-06-24T12:26:51.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 9,
        "judul_sub_bab" => "Pertidaksamaan Linear Satu Variabel",
        "isi_sub_bab" => "<div>Suatu ketidaksamaan selalu ditandai dengan salah satu tanda hubung berikut.<br>&nbsp;“&lt;” untuk menyatakan kurang dari.<br>&nbsp;“&gt;” untuk menyatakan lebih dari.<br>&nbsp;“≤” untuk menyatakan tidak lebih dari atau kurang dari atau sama dengan.<br>&nbsp;“≥” untuk menyatakan tidak kurang dari atau lebih dari atau sama dengan.</div><div>&nbsp;</div><div>Pertidaksamaan adalah kalimat terbuka yang menyatakan hubungan ketidaksamaan (&gt;, &lt;,≤, atau ≥).</div><div>&nbsp;</div><div>Untuk menentukan penyelesaian pertidaksamaan linear satu variabel, dapat dilakukan dalam dua cara sebagai berikut.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Mencari lebih dahulu penyelesaian persamaan yang diperoleh dari pertidaksamaan dengan mengganti tanda ketidaksamaan dengan tanda “=”.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Menyatakan ke dalam pertidaksamaan yang ekuivalen.</div>",
        "created_at" => "2022-06-24T12:27:43.000000Z",
        "updated_at" => "2022-06-24T12:27:43.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 10,
        "judul_sub_bab" => "Perbandingan dan Aritmetika Sosial",
        "isi_sub_bab" => "<div>Harga pembelian, harga penjualan, untung, dan rugi.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Harga pembelian adalah harga barang dari pabrik, grosir, atau tempat lainnya.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Harga penjualan adalah harga barang yang ditetapkan oleh pedagang kepada pembeli.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Untung atau laba adalah selisih antara harga penjualan dengan harga pembelian jika harga penjualan lebih dari harga pembelian.<br>&nbsp;Untung = harga penjualan – harga pembelian.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Rugi adalah selisih antara harga penjualan dengan harga pembelian jika harga penjualan kurang dari harga pembelian.<br>&nbsp;Rugi = harga pembelian – harga penjualan.</div><div>&nbsp;</div><div>Menentukan persentase untung atau rugi.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Persentase untung&nbsp; untung / harga pembelian x 100 %</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Persentase rugi rugi / harga pembelian x 100%</div><div>&nbsp;</div><div>Menentukan harga pembelian dan harga penjualan jika persentase untung atau rugi diketahui.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Jika untung maka berlaku<br>&nbsp;harga penjualan = harga pembelian + untung<br>&nbsp;harga pembelian = harga penjualan – untung</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Jika rugi maka berlaku<br>&nbsp;harga penjualan = harga pembelian – rugi<br>&nbsp;harga pembelian = harga penjualan + rugi</div><div>&nbsp;</div><div>Bruto, tara, dan neto<br>&nbsp;Bruto = neto + tara<br>&nbsp;Neto = bruto – tara<br>&nbsp;Tara = bruto – neto</div><div>&nbsp;</div><div>Persen tara dan harga bersih<br>&nbsp;Tara = persen tara x&nbsp; bruto<br>&nbsp;Harga bersih = neto x&nbsp; harga/satuan berat</div><div>&nbsp;</div><div>Ada dua jenis bunga tabungan, yaitu bunga tunggal dan bunga majemuk. Bunga tunggal adalah bunga yang dihitung berdasarkan besarnya modal saja, sedangkan bunga majemuk adalah bunga yang dihitung berdasarkan besarnya modal dan bunga.</div><div>&nbsp;</div><div>Pajak adalah suatu kewajiban yang dibebankan kepada masyarakat untuk menyerahkan sebagian kekayaan kepada negara menurut peraturan-peraturan yang telah ditetapkan pemerintah.</div><div>&nbsp;</div><div>Ada dua cara dalam membandingkan dua besaran sebagai berikut.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Dengan mencari selisih.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Dengan mencari hasil bagi.</div><div>&nbsp;</div><div>Menyederhanakan perbandingan hanya dapat dilakukan pada dua besaran yang sejenis.</div><div>&nbsp;</div><div>Skala adalah perbandingan antara jarak pada gambar dengan jarak sebenarnya.</div><div>&nbsp;</div><div>Pada gambar berskala selalu berlaku hal berikut.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Mengubah ukuran tetapi tidak mengubah bentuk.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Ukuran dapat diperbesar atau diperkecil.</div><div>&nbsp;</div><div>Pada perbandingan senilai, nilai suatu barang akan naik/turun sejalan dengan nilai barang yang dibandingkan. Grafik perbandingan senilai berupa garis lurus</div><div>&nbsp;</div><div>Pada perbandingan berbalik nilai, jika nilai sebuah barang naik maka nilai barang yang dibandingkan akan turun atau sebaliknya. Grafik perbandingan berbalik nilai berupa kurva mulus.</div>",
        "created_at" => "2022-06-24T12:29:50.000000Z",
        "updated_at" => "2022-06-24T12:29:50.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 11,
        "judul_sub_bab" => "Segitiga",
        "isi_sub_bab" => "<div>Segitiga siku-siku dapat dibentuk dari sebuah persegi panjang yang dipotong menurut diagonalnya. Besar salah satu sudut pada segitiga siku-siku adalah 90°.</div><div>&nbsp;</div><div>Sifat-sifat segitiga sama kaki:</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Dapat dibentuk dari dua buah segitiga siku-siku yang sama besar dan sebangun;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Mempunyai satu sumbu simetri;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Mempunyai dua buah sisi yang sama panjang;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Mempunyai dua buah sudut yang sama besar;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Dapat menempati bingkainya dengan tepat dalam dua cara.</div><div>&nbsp;</div><div>Sifat-sifat segitiga sama sisi:</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Mempunyai tiga&nbsp; buah sumbu simetri;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Mempunyai tiga buah sisi yang sama panjang;</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Mempunyai tiga buah sudut yang sama besar (60°);</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Dapat menempati bingkainya dengan tepat dalam enam cara.</div><div>&nbsp;</div><div>Jumlah ketiga sudut segitiga adalah 180°.</div><div>&nbsp;</div><div>Ketidaksamaan segitiga<br>&nbsp;Jumlah dua buah sisi pada segitiga selalu lebih panjang daripada sisi ketiga.</div><div>&nbsp;</div><div>Pada setiap segitiga berlaku sudut terbesar terletak berhadapan dengan sisi terpanjang, sedangkan sudut terkecil terletak berhadapan dengan sisi terpendek.</div><div>&nbsp;</div><div>Besar sudut luar suatu segitiga sama dengan jumlah dua sudut dalam yang tidak berpelurus dengan sudut luar tersebut.</div><div>&nbsp;</div><div>Keliling segitiga yang panjang sisinya a, b, dan c adalah K = a + b + c.</div><div>Luas segitiga dengan panjang alas a dan tinggi t adalah L = ½ x a x t&nbsp;</div>",
        "created_at" => "2022-06-24T12:31:23.000000Z",
        "updated_at" => "2022-06-24T12:31:23.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 11,
        "judul_sub_bab" => "Segi Empat",
        "isi_sub_bab" => "<div>Persegi panjang adalah bangun segi empat dengan panjang sisi yang berhadapan sama panjang dan sejajar.<br>&nbsp;Keliling dan luas persegi panjang dengan panjang p dan lebar l adalah K = 2(p x l) dan L = p x l.</div><div>&nbsp;</div><div>Persegi adalah bangun segi empat yang memiliki empat sisi sama panjang dan empat sudut siku-siku.<br>&nbsp;Keliling dan luas persegi dengan panjang sisi s adalah K = 4s dan L = s2.</div><div>&nbsp;</div><div>Jajargenjang adalah bangun segi empat yang dibentuk dari sebuah segitiga dan bayangannya yang diputar setengah putaran (180°) pada titik tengah salah satu sisinya.<br>&nbsp;Keliling dan luas jajargenjang dengan panjang sisi alas a dan sisi lainnya b, serta tinggi t dirumuskan dengan K = 2(a + b) dan L = a x t.</div><div>&nbsp;</div><div>Belah ketupat adalah bangun segi empat yang dibentuk dari gabungan segitiga sama kaki dan bayangannya setelah dicerminkan terhadap alasnya.<br>&nbsp;Keliling dan luas belah ketupat dengan panjang sisi s serta diagonal d1 dan d2 dirumuskan dengan K = 4s dan L =&nbsp; ½ x d1 x d2</div><div>&nbsp;</div><div>Layang-layang adalah segi empat yang dibentuk dari gabungan dua buah segitiga sama kaki yang alasnya sama panjang dan berimpit.<br>&nbsp;Keliling dan luas layang-layang dengan sisi pendek a dan sisi panjang b serta diagonal d1 dan d2 adalah K = 2(a + b) dan L = ½ x d1 x d2</div><div>&nbsp;</div><div>Trapesium adalah bangun segi empat yang mempunyai tepat sepasang sisi yang berhadapan sejajar.<br>&nbsp;Keliling dan luas trapesium dengan panjang sisi sejajar a dan b, panjang sisi tidak sejajar c dan d, serta tinggi t adalah K = a + b + c + d dan L = ½ (axb)xt</div>",
        "created_at" => "2022-06-24T12:31:46.000000Z",
        "updated_at" => "2022-06-24T12:31:46.000000Z"
      ]);

      // SUBBAB MATEMATIKA KELAS 8

      DB::table('sub_babs')->insert([
        "id_bab" => 12,
        "judul_sub_bab" => "Fungsi",
        "isi_sub_bab" => "<div>Relasi dari himpunan&nbsp; <em>A</em> ke himpunan <em>B</em> adalah hubungan yang memasangkan anggota himpunan <em>A</em> dengan anggota himpunan <em>B</em>.</div><div>&nbsp;</div><div>Pemetaan atau fungsi dari himpunan <em>A</em> ke himpunan <em>B</em> adalah relasi khusus yang memasangkan setiap anggota himpunan <em>A</em> dengan tepat satu anggota himpunan <em>B</em>.</div><div>&nbsp;</div><div>Relasi himpunan atau fungsi dapat dinyatakan dengan diagram panah, diagram kartesius, dan himpunan pasangan terurut.</div><div>&nbsp;</div><div>Jika banyaknya anggota himpunan <em>A = m</em> dan banyak anggota himpunan <em>B = n</em> maka banyaknya pemetaan dari <em>A</em> ke <em>B</em> sama dengan <em>nm</em>.</div><div>&nbsp;</div><div>Dua buah himpunan A dan B disebut berkorespondensi satu-satu jika setiap anggota <em>A</em> berpasangan dengan tepat satu anggota <em>B</em>, dan setiap anggota B berpasangan dengan tepat satu anggota B, sehingga <em>n(A) = n(B)</em>.</div><div>&nbsp;</div><div>Banyaknya korespondensi satu-satu dari A ke B jika <em>n(A) = n(B) = n</em>&nbsp;</div>",
        "created_at" => "2022-06-24T12:51:53.000000Z",
        "updated_at" => "2022-06-24T12:51:53.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 13,
        "judul_sub_bab" => "Dalil Pythagoras",
        "isi_sub_bab" => "<div>Kuadrat suatu bilangan adalah perkalian antara bilangan tersebut dengan dirinya sendiri.</div><div>&nbsp;</div><div>Akar kuadrat suatu bilangan adalah bilangan tak negatif yang jika dikuadratkan akan menghasilkan bilangan yang sama dengan bilangan semula.</div><div>&nbsp;</div><div>Teorema Pythagoras menyatakan bahwa kuadrat sisi miring pada segitiga siku-siku sama dengan jumlah kuadrat sisi-sisinya.</div><div>&nbsp;</div><div>Menentukan jenis segitiga jika diketahui sisi-sisinya</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Jika kuadrat sisi terpanjang sama dengan jumlah kuadrat sisi-sisi lainnya maka segitiga tersebut merupakan segitiga siku-siku.</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Jika kuadrat sisi terpanjang lebih kecil dari jumlah kuadrat sisi-sisi lainnya maka segitiga tersebut merupakan segitiga lancip.</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Jika kuadrat sisi terpanjang lebih besar dari jumlah kuadrat sisi-sisi lainnya maka segitiga tersebut merupakan segitiga tumpul.</div><div>&nbsp;</div><div>Tripel Pythagoras adalah bilangan bulat positif yang kuadrat bilangan terbesarnya sama dengan jumlah kuadrat bilangan yang lainnya.</div><div>&nbsp;</div><div>Panjang diagonal sisi kubus yang panjang sisinya a adalah <em>a√2</em>.</div><div>&nbsp;</div><div>Panjang diagonal ruang kubus yang panjang sisinya a adalah <em>a√3</em>.</div>",
        "created_at" => "2022-06-24T12:53:36.000000Z",
        "updated_at" => "2022-06-24T12:53:36.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 14,
        "judul_sub_bab" => "Garis Singgung Lingkaran",
        "isi_sub_bab" => "<div>Sifat garis singgung pada lingkaran adalah sebagai berikut.</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Melalui sebuah titik yang berada pada lingkaran hanya dapat dibuat satu garis singgung lingkaran.</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Garis singgung lingkaran tegak lurus dengan jari-jari lingkaran yang melalui titik singgungnya.</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Melalui sebuah titik yang berada di luar lingkaran hanya dapat dibuat dua garis singgung lingkaran melalui titik tersebut.</div><div>&nbsp;</div><div>Garis singgung persekutuan adalah garis yang menyinggung dua lingkaran secara bersamaan. Ada dua jenis garis singgung persekutuan, yaitu garis&nbsp; singgung persekutuan dalam dan garis singgung persekutuan luar.</div><div>&nbsp;</div><div>Panjang garis singgung lingkaran adalah&nbsp; <em>g2 = p2 – r2</em><br> Panjang garis singgung persekutuan dalam dua lingkaran adalah<em> d2&nbsp; = s2 – (r1 + r2)2</em><br> Panjang garis singgung persekutuan luar dua lingkaran adalah <em>l2 = s2 – (r1-r2)2</em><br> dimana <em>r1 &gt; r2 </em>, dan<br>&nbsp;<em>d</em>&nbsp; :&nbsp; Panjang garis singgung persekutuan dalam dua lingkaran<br> <em>g</em>&nbsp; : Panjang garis singgung lingkaran<br> <em>p</em>&nbsp; : Jarak antara titik pusat lingkaran dengan titik yang berada di luar lingkaran<br> <em>s</em>&nbsp; :&nbsp; Jarak antara kedua pusat dua lingkaran<br> <em>r1</em> :&nbsp; Jari-jari lingkaran pertama<br> <em>r2</em> :&nbsp; Jari-jari lingkaran kedua</div>",
        "created_at" => "2022-06-24T12:54:44.000000Z",
        "updated_at" => "2022-06-24T12:54:44.000000Z"
      ]);

      // SUBBAB MATEMATIKA KELAS 9

      DB::table('sub_babs')->insert([
        "id_bab" => 15,
        "judul_sub_bab" => "Kesebangunan",
        "isi_sub_bab" => "<div>Dua bangun yang bentuk dan ukurannya sama dinamakan dua bangun yang kongruen.</div><div>&nbsp;</div><div>Dua bangun datar yang sebangun (selain lingkaran) selalu memiliki ciri-ciri sebagai berikut:</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;sisi-sisi yang seletak atau bersesuaian adalah sebanding, artinya perbandingan panjang sisi-sisi itu sama,</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;sudut-sudut yang seletak atau bersesuaian adalah sama besar.</div><div>&nbsp;</div><div>Dua segitiga akan kongruen jika memenuhi salah satu syarat berikut ini.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Ketiga sisi pada segitiga pertama sama panjang dengan ketiga sisi pada segitiga kedua (s, s, s)</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Dua sisi pada segitiga pertama sama dengan dua sisi pada segitiga kedua, dan kedua sudut apitnya sama (s, sd, s)</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Dua sudut dalam segitiga pertama sama dengan dua sudut dalam segitiga kedua. Sisi yang menjadi salah satu kaki sudut-sudut itu sama (sd, s, sd).</div><div>&nbsp;</div><div>Dua segitiga akan sebangun jika memenuhi salah satu syarat berikut ini.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Sisi-sisi yang seletak atau bersesuaian mempunyai perbandingan yang sama (s,s, s).</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Dua buah sudutnya sama besar (sd, sd).</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Kedua segitiga itu memiliki satu sudut sama besar dan kedua sisi yang mengapitnya mempunyai perbandingan yang sama (s, sd, s).</div>",
        "created_at" => "2022-06-24T13:01:50.000000Z",
        "updated_at" => "2022-06-24T13:01:50.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 16,
        "judul_sub_bab" => "Pengolahan dan Penyajian Data",
        "isi_sub_bab" => "<div>Statistika merupakan ilmu yang mempelajari metode pengumpulan, pengolahan, dan penarikan kesimpulan dari data.</div><div>&nbsp;</div><div>Populasi adalah kumpulan objek yang menjadi sasaran penelitian dan memiliki karakteristik yang sama.</div><div>&nbsp;</div><div>Sampel adalah bagian dari populasi yang diteliti secara langsung dan dapat digunakan sebagai dasar penarikan kesimpulan.</div><div>&nbsp;</div><div>Data tunggal merupakan datum-datum yang memiliki satuan yang sama. Data tunggal dibagi dua, yaitu data tunggal biasa dan data tunggal berbobot.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Data tunggal biasa adalah data tunggal yang disajikan tanpa menggunakan tabel frekuensi.</div><div>-&nbsp; &nbsp; &nbsp; &nbsp;Data tunggal berbobot adalah data tunggal yang disajikan menggunakan tabel frekuensi.</div><div>&nbsp;</div><div>Jangkauan adalah selisih antara nilai terbesar dan nilai terkecil dalam satu kelompok nilai.</div>",
        "created_at" => "2022-06-24T13:04:34.000000Z",
        "updated_at" => "2022-06-24T13:04:34.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 17,
        "judul_sub_bab" => "Barisan",
        "isi_sub_bab" => "<div>Barisan bilangan (dituliskan U1, U2, U3, . . . , Un) adalah sekumpulan bilangan yang tersusun menurut pola tertentu dan setiap unsur bilangan yang tersusun itu disebut suku barisan. <br><br>Barisan aritmetika<br>&nbsp;<em>U1, U2, U3, . . . , Un–1, Un </em>disebut barisan aritmetika jika <em>U2 – U1 = U3 – U2&nbsp; = Un – Un-1 = b</em><br> Suku&nbsp; ke-n barisan aritmetika adalah<em> a, (a + b), (a + 2b), . . . ,&nbsp; [a + (n – 1) b]</em>.<br><br>U1, U2, U3,…,Un-1, Un disebut barisan geometri jika r =&nbsp; U2/U1 = U3/U2 =...= Un/Un-1<br>Suku ke-n barisan geometri adalah a, ar, ar2,…,arn-1<br><br>Rumus suku ke-n adalah&nbsp; <em>Un </em>= . . . .<br>&nbsp;a = . . . .<br>&nbsp;r = . . . .<br>&nbsp;n = . . . .<br>&nbsp;Barisan geometri akan naik jika <em>Un . . . Un–1</em> turun jika <em>Un . . . Un-1</em> dan bergantian turun naik jika r &lt; 0.</div>",
        "created_at" => "2022-06-24T13:07:10.000000Z",
        "updated_at" => "2022-06-24T13:07:10.000000Z"
      ]);

      DB::table('sub_babs')->insert([
        "id_bab" => 17,
        "judul_sub_bab" => "Deret",
        "isi_sub_bab" => "<div>Deret bilangan adalah jumlah dari barisan bilangan.<br>Dituliskan <em>Sn = U1 + U2 + U2 + . . . + Un</em></div><div><br>Deret aritmetika<br>a + (a + b) + (a + 2b) + . . .&nbsp; + (a + (n – 1) b) disebut . . . aritmetika.</div><div>Rumus jumlah n suku adalah&nbsp; Sn = n/2 (a + U) = . . . .</div><div>Selain itu berlaku hubungan Un = Sn – Sn-1<br><br>Deret geometri</div><div>a + ar2 + ar3 + . . . + arn-1&nbsp; disebut deret geometri.</div><div>Rumus jumlah n suku adalah</div><div>Sn = a(...^n-1)/r-1 , jika r . . . 1</div><div>Sn = a(...-...^n)/1-r , jika r . . . 1</div><div>Selain itu berlaku hubungan Un = Sn – Sn-1</div>",
        "created_at" => "2022-06-24T13:08:53.000000Z",
        "updated_at" => "2022-06-24T13:08:53.000000Z"
      ]);

      // SOAL MATEMATIKA KELAS 7

      DB::table('soals')->insert([
        "id_sub_bab" =>  18,
        "soal" => "<div>14 – 34 =&nbsp;</div><div>A. &nbsp; 20</div><div>B. &nbsp; 10</div><div>C. &nbsp; 30</div><div>D. &nbsp; -20</div><div>E. &nbsp; -10&nbsp;</div>",
        "jawaban" => "D",
        "created_at" => "2022-06-24T13:26:36.000000Z",
        "updated_at" => "2022-06-24T13:26:36.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 18,
        "soal" => "<div>20 + 5 =&nbsp;</div><div>A. &nbsp; 20</div><div>B. &nbsp; 25</div><div>C. &nbsp; 22</div><div>D. &nbsp; 27</div><div>E. &nbsp; 30</div>",
        "jawaban" => "B",
        "created_at" => "2022-06-24T13:27:34.000000Z",
        "updated_at" => "2022-06-24T13:27:34.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 19,
        "soal" => "<div>(-6) x (-7) =&nbsp;</div><div>A. &nbsp; 13</div><div>B. &nbsp; -13</div><div>C. &nbsp; 42</div><div>D. &nbsp; 41</div><div>E. &nbsp; -42</div>",
        "jawaban" => "C",
        "created_at" => "2022-06-24T13:28:19.000000Z",
        "updated_at" => "2022-06-24T13:28:19.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 19,
        "soal" => "<div>40 : (-5) =&nbsp;</div><div>A. &nbsp; 40</div><div>B. &nbsp; 5</div><div>C. &nbsp; -8</div><div>D. &nbsp; -40</div><div>E. &nbsp; 8<br><br></div>",
        "jawaban" => "C",
        "created_at" => "2022-06-24T13:29:10.000000Z",
        "updated_at" => "2022-06-24T13:29:10.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 21,
        "soal" => "<div>Diketahui bentuk aljabar 5<em>a</em>² − 3<em>a</em> − 9, suku yang merupakan konstanta saja adalah …</div><div>A. &nbsp; 5</div><div>B. &nbsp; a</div><div>C. &nbsp; -3</div><div>D. &nbsp; -9</div><div>E. &nbsp; 9</div>",
        "jawaban" => "D",
        "created_at" => "2022-06-24T13:30:01.000000Z",
        "updated_at" => "2022-06-24T13:30:01.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 21,
        "soal" => "<div>Diketahui bentuk aljabar 5<em>a</em>&nbsp;− 3<em>a</em> − 9, suku yang merupakan variabel saja adalah …</div><div>A. &nbsp; 5</div><div>B.&nbsp; &nbsp;a</div><div>C. &nbsp; -3</div><div>D. &nbsp; -9</div><div>E. &nbsp; 9</div>",
        "jawaban" => "B",
        "created_at" => "2022-06-24T13:34:27.000000Z",
        "updated_at" => "2022-06-24T13:34:27.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 22,
        "soal" => "<div>K(ax + b) sama dengan …&nbsp;</div><div>A. &nbsp; Kax + b</div><div>B. &nbsp; K + ax + b</div><div>C. &nbsp; Kax + kb</div><div>D. &nbsp; K + a + x + b</div><div>E. &nbsp; Kaxb</div>",
        "jawaban" => "C",
        "created_at" => "2022-06-24T13:35:18.000000Z",
        "updated_at" => "2022-06-24T13:35:18.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 22,
        "soal" => "<div>K(ax - b) sama dengan …&nbsp;</div><div>A. &nbsp; Kax - b</div><div>B. &nbsp; K - ax - b</div><div>C. &nbsp; Kax - kb</div><div>D. &nbsp; K - a - x - b</div><div>E. &nbsp; Kaxb</div>",
        "jawaban" => "C",
        "created_at" => "2022-06-24T13:39:12.000000Z",
        "updated_at" => "2022-06-24T13:39:12.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 23,
        "soal" => "<div>Diketahui persamaan 5x-11=2x+7. Nilai dari x+9 adalah …</div><div>A.&nbsp; &nbsp; 12</div><div>B.&nbsp; &nbsp; 9</div><div>C. &nbsp; 16</div><div>D. &nbsp; 15</div><div>E.&nbsp; &nbsp; 20</div>",
        "jawaban" => "D",
        "created_at" => "2022-06-24T13:39:46.000000Z",
        "updated_at" => "2022-06-24T13:39:46.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 23,
        "soal" => "<div>Pak Tono memasang pintu sebuah gedung berbentuk persegi panjang. Ukuran panjang diagonal pintu masing-masing (4x+1) meter dan (3x+2) meter. Panjang diagonal pintu tersebut adalah…</div><div>A. &nbsp; 7</div><div>B. &nbsp; 6</div><div>C. &nbsp; 5</div><div>D. &nbsp; 4</div><div>E. &nbsp; 3</div>",
        "jawaban" => "C",
        "created_at" => "2022-06-24T13:40:04.000000Z",
        "updated_at" => "2022-06-24T13:40:04.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 24,
        "soal" => "<div>Himpunan penyelesaian pertidaksamaan 7x−1≤5x+5 dengan x bilangan cacah adalah...<br>&nbsp;A. {1,2,3}<br>B. {0,2,3}<br>C. {0,1,2,3}<br>D. {1,2,3,4}<br>E. {0,1}</div>",
        "jawaban" => "C",
        "created_at" => "2022-06-24T13:44:12.000000Z",
        "updated_at" => "2022-06-24T13:44:12.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 24,
        "soal" => "<div>Himpunan penyelesaian dari pertidaksamaan x−3≤5−3x, dengan xbilangan bulat adalah...<br>A. {x|x≤1, x bilangan bulat}<br>B. {x|x≤2, x bilangan bulat}<br>C. {x|x≤3, x bilangan bulat}<br>D. {x|x≥1, x bilangan bulat}<br>E. {x|x≥2, x bilangan bulat}</div>",
        "jawaban" => "B",
        "created_at" => "2022-06-24T13:46:30.000000Z",
        "updated_at" => "2022-06-24T13:46:30.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 25,
        "soal" => "<div>Jika harga 1 kuintal beras Rp 600.000,00, dijual mengalami kerugian Rp 15.000,00 maka harga jual tiap kilogram beras tersebut adalah ….</div><div>A.&nbsp; &nbsp; Rp5.774,00</div><div>B.&nbsp; &nbsp; Rp5.800,00</div><div>C. &nbsp; Rp5.850,00</div><div>D. &nbsp; Rp5.900,00</div><div>E.&nbsp; &nbsp; Rp5.950,00</div>",
        "jawaban" => "C",
        "created_at" => "2022-06-24T13:47:02.000000Z",
        "updated_at" => "2022-06-24T13:47:02.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 25,
        "soal" => "<div>Sebuah segitiga dengan luas daerah 75 mm diperbesar dengan rasio 4 : 3. Segitiga baru luasnya adalah</div><div>A. &nbsp; 60mm</div><div>B. &nbsp; 72mm</div><div>C. &nbsp; 89mm</div><div>D. &nbsp; 100mm</div><div>E. &nbsp; 125mm</div>",
        "jawaban" => "D",
        "created_at" => "2022-06-24T13:47:17.000000Z",
        "updated_at" => "2022-06-24T13:47:17.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 26,
        "soal" => "<div>Segitiga siku – siku mempunyai panjang sisi tegak 8 cm dan panjang ala 15 cm. Berapa keliling dari segitiga tersebut....<br>A. 55 cm<br>B. 35 cm<br>C. 60 cm<br>D. 40 cm</div><div>E. 50 cm</div>",
        "jawaban" => "D",
        "created_at" => "2022-06-24T13:50:51.000000Z",
        "updated_at" => "2022-06-24T13:50:51.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 26,
        "soal" => "<div>Sebuah segitiga sama kaki&nbsp; mempunyai dengan alas = 6x – 8 cm dan tinggi 19 cm. Jika luasnya 209 cm. Berapa panjang segitiga sebenarnya?<br>A. 22 cm<br>B. 18 cm<br>C. 26 cm<br>D. 28 cm</div><div>E. 30 cm</div>",
        "jawaban" => "A",
        "created_at" => "2022-06-24T13:51:08.000000Z",
        "updated_at" => "2022-06-24T13:51:08.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 27,
        "soal" => "<div>Sepetak sawah berbentuk persegi dengan panjang sisi 50 m. Luas sawah tersebut adalah .... cm²<br>A. 2.000<br>B. 2.250<br>C. 2.500<br>D. 3.000<br>E.&nbsp; 3.500</div>",
        "jawaban" => "C",
        "created_at" => "2022-06-24T13:52:16.000000Z",
        "updated_at" => "2022-06-24T13:52:16.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 27,
        "soal" => "<div>Sebuah persegi memiliki panjang sisi 28 cm. Luas dan keliling dari persegi tersebut adalah ....<br>A. Luas dan keliling persegi = 784 cm2 dan 56 cm<br>B. Luas dan keliling persegi = 794 cm2 dan 122 cm<br>C. Luas dan keliling persegi = 804 cm2 dan 122 cm<br>D. Luas dan keliling persegi = 814 cm2 dan 132 cm<br>E. Luas dan keliling persegi = 784 cm2 dan 112 cm</div>",
        "jawaban" => "E",
        "created_at" => "2022-06-24T13:53:38.000000Z",
        "updated_at" => "2022-06-24T13:53:38.000000Z"
      ]);

      // SOAL MATEMATIKA KELAS 8
      DB::table('soals')->insert([
        "id_sub_bab" => 28,
        "soal" => "<div>Diketahui P = {2, 4, 6} dan Q = {2, 3, 4}. Himpunan pasangan berurutan dari P ke Q yang menyatakan \"kelipatan dari\" adalah . . . .</div><div>A. &nbsp; {(2, 2), (4, 2), (4, 4), (6, 2), (6, 3)}</div><div>B. &nbsp; {(2, 2), (2, 3), (4, 2), (6, 2), (6, 3)}</div><div>C. &nbsp; {(2, 3), (4, 2), (4, 3), (6, 2), (6, 3)}</div><div>D. &nbsp; {(2, 2), (4, 2), (4, 3), (6, 2), (6, 3)}</div><div>E. &nbsp; {(2, 2), (4, 2), (4, 2), (6, 2), (6, 3)}</div>",
        "jawaban" => "A",
        "created_at" => "2022-06-24T13:55:13.000000Z",
        "updated_at" => "2022-06-24T13:55:13.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 28,
        "soal" => "<div>Jika n(A) = 6 dan n(A x B) = 18, maka n(B) = . . . .</div><div>A. &nbsp; 3</div><div>B. &nbsp; 4</div><div>C. &nbsp; 5</div><div>D. &nbsp; 6</div><div>E. &nbsp; 7</div>",
        "jawaban" => "A",
        "created_at" => "2022-06-24T13:55:24.000000Z",
        "updated_at" => "2022-06-24T13:55:24.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 29,
        "soal" => "<div>Panjang sisi -sisi segitiga siku – siku adalah x cm, (x+1) cm dan (x+2) cm, maka x =&nbsp;</div><div>A. &nbsp; 1 cm</div><div>B. &nbsp; 2 cm</div><div>C. &nbsp; 3 cm</div><div>D. &nbsp; 4 cm</div><div>E. &nbsp; 5 cm</div>",
        "jawaban" => "C",
        "created_at" => "2022-06-24T13:56:09.000000Z",
        "updated_at" => "2022-06-24T13:56:09.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 9,
        "soal" => "<div>Seorang pengamat berada di atas mercusuar yang tingginya 12 meter. Ia melihat kapal A dan kapal B yang berlayar di laut. Jarak pengamat dengan kapal A dan kapal B berturut-turut 20 meter dan 13 meter. Posisi kapal A, kapal B, dan kaki mercusuar terletak segaris. Jarak kapal A dan kapal B adalah...</div><div>A. &nbsp; 7 meter</div><div>B. &nbsp; 11 meter</div><div>C. &nbsp; 12 meter</div><div>D. &nbsp; 15 meter</div><div>E. &nbsp; 17 meter</div>",
        "jawaban" => "B",
        "created_at" => "2022-06-24T13:56:25.000000Z",
        "updated_at" => "2022-06-24T13:56:25.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 30,
        "soal" => "<div>Seorang pengamat berada di atas mercusuar yang tingginya 12 meter. Ia melihat kapal A dan kapal B yang berlayar di laut. Jarak pengamat dengan kapal A dan kapal B berturut-turut 20 meter dan 13 meter. Posisi kapal A, kapal B, dan kaki mercusuar terletak segaris. Jarak kapal A dan kapal B adalah...</div><div>A. &nbsp; 7 meter</div><div>B. &nbsp; 11 meter</div><div>C. &nbsp; 12 meter</div><div>D. &nbsp; 15 meter</div><div>E. &nbsp; 17 meter</div>",
        "jawaban" => "B",
        "created_at" => "2022-06-24T13:57:17.000000Z",
        "updated_at" => "2022-06-24T13:57:17.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 30,
        "soal" => "<div>Diketahui dua lingkaran jari-jari lingkaran masing-masing 14 cm dan 2 cm. Jika jarak antara kedua pusat lingkaran adalah 20 cm maka panjang garis singgung persekutuan luar kedua lingkaran adalah….</div><div>A.&nbsp; &nbsp; 16 cm</div><div>B.&nbsp; &nbsp; 18 cm</div><div>C.&nbsp; &nbsp; 22 cm</div><div>D.&nbsp; &nbsp; 25 cm</div><div>E.&nbsp; &nbsp; 30 cm&nbsp;</div>",
        "jawaban" => "A",
        "created_at" => "2022-06-24T13:58:07.000000Z",
        "updated_at" => "2022-06-24T13:58:07.000000Z"
      ]);

      // SOAL MATEMATIKA KELAS 9

      DB::table('soals')->insert([
        "id_sub_bab" => 31,
        "soal" => "<div>Panjang bayangan sebuah menara 15 m dan pada saat yang sama sebuah tiang pancang memiliki bayangan 3 m. Jika tinggi tiang pancang 7 m, maka tinggi menara adalah...</div><div>A.&nbsp; &nbsp;19 meter</div><div>B.&nbsp; &nbsp; 22 meter</div><div>C.&nbsp; &nbsp; 23 meter</div><div>D.&nbsp; &nbsp; 25 meter</div><div>E.&nbsp; &nbsp; &nbsp;35 meter</div>",
        "jawaban" => "D",
        "created_at" => "2022-06-24T13:58:57.000000Z",
        "updated_at" => "2022-06-24T13:58:57.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 31,
        "soal" => "<div>Suatu pohon yang tingginya 24 m mempunyai bayangan di tanah sepanjang 18 m. Jika pohon pinus yang tinginya 60 m, maka bayangannya di tanah sepanjang...</div><div>A.&nbsp; &nbsp; 35 meter</div><div>B.&nbsp; &nbsp; 40 meter</div><div>C. &nbsp; 75 meter</div><div>D. &nbsp; 45 meter</div><div>E.&nbsp; &nbsp; 80 meter</div>",
        "jawaban" => "D",
        "created_at" => "2022-06-24T13:59:09.000000Z",
        "updated_at" => "2022-06-24T13:59:09.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 32,
        "soal" => "<div>Tim Bola Basket terdiri dari 5siswa memiliki rata-rata berat badan 45 kg. Selisih berat badan terbesar dan terkecil 15 kg. Ada satu orang terberat dan lainnya sama beratnya. Berat badan siswa yang terbesar adalah...</div><div>A.&nbsp; &nbsp; 42kg</div><div>B.&nbsp; &nbsp; 55kg</div><div>C. &nbsp; 57kg</div><div>D. &nbsp; 60kg</div><div>E.&nbsp; &nbsp; 80kg</div>",
        "jawaban" => "C",
        "created_at" => "2022-06-24T13:59:50.000000Z",
        "updated_at" => "2022-06-24T13:59:50.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 32,
        "soal" => "<div>Data tinggi badan 20 siswa (dalam cm) sebagai berikut.<br>157, 159, 159, 156, 157, 157, 158, 158, 158, 160, 160, 161, 158, 159, 159, 156, 156, 157, 159, 160, 160, 158, 159, 160.<br>Modus tinggi badan siswa adalah...</div><div>A.&nbsp; &nbsp; 175</div><div>B.&nbsp; &nbsp; 158</div><div>C. &nbsp; 159</div><div>D. &nbsp; 160</div><div>E.&nbsp; &nbsp; 161</div>",
        "jawaban" => "C",
        "created_at" => "2022-06-24T14:00:07.000000Z",
        "updated_at" => "2022-06-24T14:00:07.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 33,
        "soal" => "<div>Suatu barisan geometri suku ke-6 = 2 dan suku ke-3 = -16, S5 adalah…</div><div>A. -40</div><div>B. -44</div><div>C. 40</div><div>D. 42</div><div>E. 44</div>",
        "jawaban" => "D",
        "created_at" => "2022-06-24T14:00:37.000000Z",
        "updated_at" => "2022-06-24T14:00:37.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 33,
        "soal" => "<div>Suku ke-40 dari barisan aritmetika 7, 5, 3, 1, … adalah …</div><div>A. -68</div><div>B. -69</div><div>C. -70</div><div>D. -71</div><div>E. -72</div>",
        "jawaban" => "D",
        "created_at" => "2022-06-24T14:00:52.000000Z",
        "updated_at" => "2022-06-24T14:00:52.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 34,
        "soal" => "<div>Jumlah bilangan kelipatan 3 dan 4 antara 200 dan 300 adalah...<br>&nbsp;1.968<br>1.764<br>1.680<br>1.476<br>1.500</div>",
        "jawaban" => "A",
        "created_at" => "2022-06-24T14:03:58.000000Z",
        "updated_at" => "2022-06-24T14:03:58.000000Z"
      ]);

      DB::table('soals')->insert([
        "id_sub_bab" => 34,
        "soal" => "<div>Jumlah bilangan kelipatan 2 dan 3 antara 200 dan 400 adalah...<br>&nbsp;9.900<br>10.900<br>13.200<br>19.600<br>19.800</div>",
        "jawaban" => "A",
        "created_at" => "2022-06-24T14:05:15.000000Z",
        "updated_at" => "2022-06-24T14:05:15.000000Z"
      ]);
}
 }
