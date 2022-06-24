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

      //BAHASA INDONESIA KELAS 7

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
      /*DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => '',
        'isi_sub_bab' => ''
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 5,
        'judul_sub_bab' => '',
        'isi_sub_bab' => ''
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 6,
        'judul_sub_bab' => '',
        'isi_sub_bab' => ''
      ]);

    BAHASA INDONESIA KELAS 8

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => 'Hiburan',
        'isi_sub_bab' => '<div>1.	Wawancara terdiri atas dua jenis yaitu wawancara ragam formal dan wawancara ragam tidak formal. 
                                  Berdasarkan ragam tersebut, kamu dapat membuat pertanyaan sesuai dengan konteks dan situasi.</div>
                          <div>2.	Laporan yang telah kamu pelajari adalah laporan dalam bentuk berita. Membuat laporan sama halnya seperti menyajikan berita. 
                                  Dalam menganalisis laporan berita harus diperhatikan aspek: apa, siapa, di mana, kapan, mengapa, dan bagaiamana kejadian tersebut.</div>
                          <div>3.	Kunci keberhasilan menulis petunjuk, yaitu memerhatikan sistematika penulisan, kejelasan kalimat, dan ketepatan informasi. 
                                  Ketiga hal tersebut dimaksudkan agar petunjuk yang kamu buat mudah dipahami.</div>
                          <div>4.	Saat mengidentifikasi unsur drama, kamu harus memerhatikan keseluruhan isi cerita atau unsur intrinsik, yang terdiri atas dialog, alur, tokoh, latar, tema, dan amanat.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => 'Pendidikan',
        'isi_sub_bab' => '<div>1.	Pada Pelajaran 1 Bagian B, kamu telah belajar menganalisis isi laporan. Mengisi laporan berbeda dengan menganalisis laporan, demikian pula saat menanggapinya. 
                                  Saat menanggapi isi laporan, kamu harus memilih pendapat yang disusun berdasarkan hasil analisis</div>
                          <div>2.	Membaca memindai adalah kegiatan membaca yang bertujuan mencari informasi baik itu makna secara cepat. 
                                  Informasi tersebut dapat diperoleh dari  kamus, indeks buku, ataupun buku telepon.</div>
                          <div>3.	Kegiatan menulis laporan tidak langsung dilakukan pada saat kamu mengobservasi objek, melainkan dilakukan sesudahnya.</div>
                          <div>4.	Saat bermain peran, hal terpenting adalah penghayatan terhadap tokoh yang kamu perankan.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => 'Peristiwa',
        'isi_sub_bab' => '<div>1.	Laporan lisan perlu memperhatikan sistematika penyampaian yang terdiri dari urutan ruang, waktu, dan topik berita.</div>
                          <div>2.	Saat ingin menemukan tempat atau arah, kamu harus berpatokan pada tempat sekarang kamu berada.</div>
                          <div>3.	Menanggapi unsur pementasan drama harus meliputi unsur gerak yang terdiri dari ekspresi wajah, ekspresi tangan, dan ekspresi tubuh. 
                                  Selain unsur gerak, ada juga unsur panggung, dan unsur setting serta pencahayaan.</div>
                          <div>4.	Dalam penulisan sebuah naskah drama, terlebih dahulu, kamu harus menentukan tema. 
                                  Lalu selanjutnya kamu harus menentukan penokohan dan perwatakan, dialog dan latar serta yang terakhir adalah waktu.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => 'Peristiwa',
        'isi_sub_bab' => '<div>1.	Hal utama yang harus diperhatikan saat kamu membaca cepat adalah pergerakan bola matamu. 
                                  Saat membaca cepat lehermu jangan ikut bergerak, karena cukup mata saja yang mengikuti tulisan.</div>
                          <div>2.	Dalam evaluasi pemeranan tokoh drama, dialog-dialog yang diucapkan tokoh-tokoh akan menjadi pusat perhatian. 
                                  Penghayatan dialog, gestur, dan kesesuaian postur tubuh menjadi hal penting yang harus kamu perhatikan.</div>
                          <div>3.	Menulis naskah drama berdasarkan kaidah penulisan naskah drama berbeda dengan menulis naskah drama berdasarkan keaslian ide. Menulis naskah drama berdasarkan kaidah penulisan naskah drama, biasanya mengadaptasi dari naskah drama yang sudah ada. 
                                  Penulisan naskah drama berdasarkan keaslian ide biasanya menyadur cerpen dan novel atau karangan sendiri.</div>'        
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => 'Kegiatan',
        'isi_sub_bab' => '<div>1.	Dalam pembelajaran penulisan surat dinas, terlebih dahulu kamu harus membedakan tata cara menulis surat resmi dan surat tidak resmi. 
                                  Setelah memahaminya, kamu akan mudah untuk menulis surat dinas ataupun jenis surat lainnya.</div>
                          <div>2.	Bermain drama dengan berimprovisasi, bukan berarti peranmu keluar dari ketentuan naskah. 
                                  Bermain peran dengan berimprovisasi justru kamu harus bermain sesuai dengan kerangka naskah drama.</div>
                          <div>3.	Saat menulis sinopsis novel remaja, kamu harus memerhatikan poin-poin penting yang terkandung di dalamnya 
                                  seperti tema, alur, dan amanat dan penokohan yang membawa alur sebuah novel.</div>'        
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => 'Ilmu Pengetahuan Populer',
        'isi_sub_bab' => '<div>1.	Laporan merupakan suatu berita tentang peristiwa dengan memerhatikan aspek 5W + 1H.</div>
                          <div>2.	Kutipan novel berisi ringkasan, kometar tentang identitas novel, pengarang, penggunaan gaya bahasa, penokohan, pesan, kesan dan lain-lain.</div>
                          <div>3.	Membaca secara ekstensif dua bacaan yang berbeda  dengan topik yang sama tidak akan memengaruhi simpulan akhir berita. 
                                  Hal tersebut dikarenakan isi permasalahan berita berbeda.</div>
                          <div>4.	Penulisan rangkuman buku berisi mengenai keseluruhan isi buku seperti sampul, halaman, isi, dan daftar pustaka.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
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
        'id_bab' => 4,
        'judul_sub_bab' => 'Lingkungan Sekitar',
        'isi_sub_bab' => '<div>1.	Pengembangan alur cerita dalam sebuah novel biasanya dari pengenalan cerita, pengungkapan peristiwa, menuju pada konflik, puncak konflik dan yang terakhir adalah penyelesaian masalah.</div>
                          <div>2.	Pada dasarnya, perdebatan dalam sebuah diskusi merupakan hal yang wajar, selama proses perdebatan itu berjalan positif dan lancar untuk mencari solusi bersama.  
                                  Dalam menyatukan pendapat, kamu juga harus memerhatikan pendapat orang lain.</div>
                          <div>3.	Saat membaca buku antologi puisi, kamu akan mengetahui gaya penulisan masing-masing penulis. Gaya penulisan seorang penyair pasti memiliki atau memuat kekhasan.</div>
                          <div>4.	Tujuan utama dari pembuatan poster atau slogan adalah untuk memengaruhi pembaca agar menuruti apa yang diinginkan pihak si pembuat. 
                                  Isi slogan atau poster harus berisi hal-hal yang beguna bagi khalayak.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => 'Kehidupan',
        'isi_sub_bab' => '<div>1.	Untuk mengidentifikasi karakter tokoh novel, kamu harus membaca dengan melibatkan diri kita secara emosional serta memberikan rasa empati dan rasa suka.</div>
                          <div>2.	Dalam menilai dan menjelaskan unsur-unsur sebuah novel, yang harus kamu lakukan adalah memerhatikan dari segi sisi cerita, tokoh, dan latar novel tersebut.</div>
                          <div>3.	Saat membawakan sebuah acara, kamu terlebih dahulu harus mengetahui jenis dan tujuan acara, peserta, dan kondisi kelangsungan acara. 
                                  Setelah mengetahuinya, kamu akan mudah memandu acara tersebut.</div>
                          <div>4.	Saat menulis sebuah puisi, kamu harus menentukan tema puisi yang akan kamu buat, dan untuk siapa puisi tersebut. Setelah itu, kamu baru memikirkan isi dan rima. 
                                  Dengan demikian puisi tersebut akan lebih baik dan terarah.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => 'Kesenian',
        'isi_sub_bab' => '<div>1.	Berita adalah sajian informasi yang harus kita ikuti perkembangannya. 
                                  Saat mendengar berita, kamu harus memerhatikan tanda intonasi agar tidak terjadi salah terima informasi saat kita mengemukakannya kembali.</div>
                          <div>2.	Sama halnya dengan mendengarkan berita, membacakan teks berita memerlukan tanda intonasi dan jeda yang tepat agar si penerima berita mudah memahaminya.</div>
                          <div>3.	Banyak hal yang menarik dari dua novel yang berbeda. 
                                  Meskipun tema yang diemban terkadang sama tetapi sudut pandang penyajiannya berbeda.</div>
                          <div>4.	Menulis puisi bebas harus memerhatikan rambu-rambu penulisan, seperti rima. 
                                  Rima dalam sebuah puisi memegang peranan penting dari estetika pendukung isi.</div>'
      ]);


      BAHASA INDONESIA KELAS 9

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
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
        'id_bab' => 4,
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
        'id_bab' => 4,
        'judul_sub_bab' => 'Macam-Macam Peristiwa',
        'isi_sub_bab' => '<div>1.	Hal-hal yang harus diperhatikan dalam memberikan komentar terhadap pendapat narasumber dalam dialog interaktif yakni 
                                  bahasa yang digunakan harus komunikatif, menggunakan kata dan kalimat yang baik dan lugas, dan komentar harus disertai alasan yang kuat dan contoh yang terdapat di masyarakat.</div>
                          <div>2.	Supaya orang lain memahami informasi yang kalian sampaikan secara lisan, kalian harus menggunakan bahasa 
                                  yang komunikatif, menggunakan kata atau kalimat yang baik dan lugas, pokok permasalahannya (informasinya harus jelas), dan sesuai dengan situasi serta kondisi.</div>
                          <div>3.	Resensi adalah ulasan atau pembicaraan mengenai suatu karya baik itu buku, film, atau karya yang lain.</div>
                          <div>4.	Berdasarkan taraf integrasinya, unsur serapan dalam bahasa Indonesia dapat dibagi atas empat golongan besar yakni adopsi, adaptasi, terjemahan, dan kreasi.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => 'Perkembangan Alat Komunikasi',
        'isi_sub_bab' => '<div>1.	Setiap puisi lama (tak terkecuali syair) terikat oleh beberapa hal seperti jumlah baris, jumlah bait, dan persajakan.</div>
                          <div>2. Dalam menceritakan kembali isi cerpen, unsur-unsur intrinsik dalam cerpen tersebut harus diuraikan secara jelas dan disertai dengan pengungkapan hal-hal yang menarik atau berkesan dalam cerpen tersebut.</div>
                          <div>3.	Iklan baris biasanya ditulis dengan menggunakan bahasa yang objektif, jujur, singkat, dan jelas.</div>
                          <div>4.	Ungkapan adalah kelompok kata atau gabungan kata yang menyatakan makna khusus (makna unsur-unsurnya seringkali menjadi kabur). 
                                  Peribahasa adalah kelompok kata atau kalimat yang tetap susunannya, biasanya mengiaskan maksud tertentu.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => 'Kegemaran Manusia',
        'isi_sub_bab' => '<div>1.	Isi dialog interaktif dapat kalian simpulkan setelah mendengarkan dengan saksama pelaksanaan dialog tersebut.</div>
                          <div>2.	Indeks nama berisi informasi tentang nama-nama tokoh yang berkaitan dengan isi buku tersebut.</div>
                          <div>3.	Langkah-langkah yang dapat kalian gunakan untuk menulis kembali cerpen yang pernah dibaca yaitu 
                                  bacalah sebuah cerpen dengan saksama, tentukan ide-ide pokok cerpen sesuai dengan alur cerpen, dan kembangkan ide-ide pokok tersebut menjadi sebuah ringkasan cerpen.</div>
                          <div>4.	Kalimat inversi adalah kalimat yang bersusun balik atau berpola P – S.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
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
        'id_bab' => 4,
        'judul_sub_bab' => 'Kondisi Pertanian di Indonesia',
        'isi_sub_bab' => '<div>1.	Alur terdiri atas tiga macam yaitu alur maju, alur mundur, dan alur campuran.</div>
                          <div>2.	Ada empat macam metode dalam menyampaikan pidato, yakni metode impromtu, metode ekstemporan, metode menghafal, dan metode naskah.</div>
                          <div>3. Grafik adalah lukisan pasang surut suatu keadaan dengan garis atau gambar (tentang turun naiknya hasil, statistik, dan sebagainya).</div>
                          <div>4.	Morfofonemik adalah perubahan fonem yang terjadi sebagai akibat pertemuan morfem dengan morfem lain.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => 'Kebersihan Lingkungan 1',
        'isi_sub_bab' => '<div>1.	Tujuan penyampaian pidato yaitu memotivasi, memersuasi, melakukan tindakan, menginformasikan, dan menghibur.</div>
                          <div>2. Latihan-latihan yang dapat dilakukan untuk melatih kemampuan drama yakni membaca puisi, menirukan binatang, menirukan orang, tertawa dan menangis, berdialog, gerak kerja panggung, serta bermain drama.</div>
                          <div>3. Membaca cepat merupakan salah satu kegiatan membaca yang menitikberatkan pada pemahaman gagasan pokok secara tepat dan berlangsung dalam waktu yang relatif singkat.</div>
                          <div>4. Kalimat majemuk setara yaitu kalimat majemuk yang terdiri atas dua klausa atau lebih yang dipadukan menjadi satu yang hubungan antarklausanya sejajar.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => 'Minat Remaja terhadap Olahraga dan Pariwisata',
        'isi_sub_bab' => '<div>1. Ada beberapa hal yang perlu kalian perhatikan ketika memberikan komentar terhadap isi pidato, yaitu komentar harus disertai dengan alasan atau bukti yang logis dan disampaikan dengan bahasa yang santun.</div>
                          <div>2. Unsur-unsur dalam lakon drama terdiri atas tema, amanat, plot (alur), karakter (perwatakan), dialog, latar, bahasa, dan interpretasi.</div>
                          <div>3. Surat pembaca berisi waktu kejadian, lokasi kejadian, kronologis kejadian, saran dan kritik pada instansi terkait, dan identitas serta alamat penulis surat.</div>
                          <div>4. Kalimat majemuk bertingkat adalah satu kalimat utama yang di dalamnya ada sebuah klausa (satu kalimat utama yang di dalamnya ada dua klausa).</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 4,
        'judul_sub_bab' => 'Kesenian yang Berasal dari Indonesia',
        'isi_sub_bab' => '<div>1. Penggambaran watak tokoh dapat kalian ketahui melalui tiga cara yakni dari segi fisis, segi psikis, dan segi sosiologis.</div>
                          <div>2.	Kerangka karya tulis ilmiah minimal terdiri atas tiga bagian yakni pendahuluan, isi, dan penutup.</div>
                          <div>3.	Preposisi dari hanya dipakai untuk menyatakan asal, sedangkan preposisi daripada dipakai untuk menyatakan perbandingan.</div>'
      ]);
    
    MATEMATIKA KELAS 7

      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Bilangan Bulat',
        'isi_sub_bab' => '<div>Bilangan bulat terdiri dari bilangan bulat negatif, nol, dan bilangan bulat positif.</div>
                          <div>Sifat-sifat penjumlahan pada bilangan bulat.&nbsp;</div>
                          <div><strong>Sifat tertutup</strong>
                            <br> 
                            Untuk setiap bilangan bulat a dan b, berlaku
                            <br> 
                            a + b = c dengan c juga bilangan bulat.
                          </div>
                          <div><strong>Sifat komutatif</strong>
                            <br> 
                            Untuk setiap bilangan bulat a dan b, selalu berlaku
                            <br> 
                            a + b = b + a.
                          </div>
                          <div><strong>Sifat asosiatif</strong>
                            <br> 
                            Untuk setiap bilangan bulat a, b, dan c selalu berlaku
                            <br> 
                            (a + b) + c = a + (b + c).
                          </div>
                          <div><strong>Mempunyai unsur identitas</strong>
                            <br> 
                            Untuk sebarang bilangan bulat a, selalu berlaku
                            <br>
                            a + 0 = 0 + a. Bilangan nol (0) merupakan unsur identitas pada penjumlahan.
                          </div>
                          <div><strong>Mempunyai invers</strong>
                            <br> 
                            Untuk setiap bilangan bulat a, selalu berlaku
                            <br> 
                            a + (–a) = (–a) + a = 0. Invers dari a adalah –a, sedangkan invers dari –a adalah a.
                            <br>
                            Jika a dan b bilangan bulat maka berlaku a – b = a + (–b).
                          </div>
                          <div>Operasi pengurangan pada bilangan bulat berlaku sifat tertutup.
                          <br>
                          <br>
                          </div>
                          <div>Jika n adalah sebarang bilangan bulat positif maka,</div>
                          <blockquote><em>n x a = a + a + ... + a</em></blockquote>
                          <div>Jika p dan q bilangan bulat maka,</div>
                          <blockquote><em>p x q = pq<br>(–p) x q = –(p x q) = –pq<br>p x (–q) = –(p x q) = –pq<br>(–p) x&nbsp; (–q) = p x q = pq</em></blockquote>
                          <div>Untuk setiap p, q, dan r bilangan bulat berlaku sifat</div>
                          <ul>
                            <li>tertutup terhadap operasi perkalian;</li>
                            <li>komutatif: p x q = q x p;</li>
                            <li>asosiatif: (p x q) x r = p x&nbsp; (q x r);</li>
                            <li>distributif perkalian terhadap penjumlahan: p x (q + r) = (p x q) + (p x r);</li><li>distributif perkalian terhadap pengurangan: p x (q – r) = (p x q) – (p x r).</li>
                          </ul>
                          <div>Unsur identitas pada perkalian adalah 1, sehingga untuk setiap bilangan bulat p berlaku p x&nbsp; 1 = 1 x p = p.<br>Pembagian merupakan operasi kebalikan dari perkalian.
                          <br>
                          Apabila dalam suatu operasi hitung campuran bilangan bulat tidak terdapat tanda kurung, pengerjaannya berdasarkan sifat-sifat operasi hitung berikut.</div>
                          <ol>
                            <li>Operasi penjumlahan (+) dan pengurangan (–) sama kuat, artinya operasi yang terletak di sebelah kiri dikerjakan terlebih dahulu.</li>
                            <li>Operasi perkalian (x) dan pembagian (:) sama kuat, artinya operasi yang terletak di sebelah kiri dikerjakan terlebih dahulu.</li>
                            <li>Operasi perkalian (x) dan pembagian (:) lebih kuat daripada operasi penjumlahan (+) dan pengurangan (–), artinya operasi perkalian (x) dan pembagian (:) dikerjakan terlebih dahulu daripada operasi penjumlahan (+) dan pengurangan (–).</li>
                          </ol>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Bilangan Pecahan',
        'isi_sub_bab' => '<div>1.	Pecahan adalah bilangan yang dapat dinyatakan sebagai p/q 
                                  dengan p, q bilangan bulat dan q ≠ 0.</div>
                          <div>2.	Pecahan merupakan bilangan yang menggambarkan bagian dari keseluruhan.&nbsp;</div>
                          <div>3.	Pecahan senilai adalah pecahan-pecahan yang bernilai sama.</div>
                          <div>4.	Pecahan senilai diperoleh dengan cara mengalikan atau membagi pembilang dan penyebutnya dengan bilangan yang sama.</div>
                          <div>4.	Pecahan senilai diperoleh dengan cara mengalikan atau membagi pembilang dan penyebutnya dengan bilangan yang sama.</div>
                          <div>5.	Suatu pecahan  p/q , q ≠ 0 dapat disederhanakan dengan cara membagi pembilang dan penyebut pecahan tersebut dengan faktor persekutuan terbesarnya.</div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Bentuk Aljabar dan Operasinya',
        'isi_sub_bab' => '<div>1.	Variabel, konstanta, faktor, serta suku sejenis dan tak sejenis.</div>
                          <div>
                            <ol>
                              <li>Variabel adalah lambang pengganti suatu bilangan yang belum diketahui nilainya dengan jelas.</li>
                              <li>Konstanta adalah suku dari suatu bentuk aljabar yang berupa bilangan dan tidak memuat variabel.</li>
                              <li>Suku-suku sejenis adalah suku yang memiliki variabel dan pangkat dari masing-masing variabel yang sama.</li>
                              <li>Suku tak sejenis adalah suku yang memiliki variabel dan pangkat dari masing-masing variabel yang tidak sama.</li>
                            </ol>
                          </div>
                          <div>
                            2.	Perkalian suatu bilangan konstanta k dengan bentuk aljabar suku satu dan suku dua dinyatakan sebagai berikut.
                                  <br>
                                  k(ax) = kax 
                                  <br>
                                  k(ax + b) = kax + kb
                          </div>
                          <div>
                            3.	Perkalian antara dua bentuk aljabar dinyatakan sebagai berikut.
                                  <br>
                                  (ax + b) (cx + d) = acx2 + (ad + bc)x + bd
                                  <br>
                                  (ax + b) (cx2 + dx + e) = acx3 + (ad + bc)x2 + (ae + bd)x + be (x + a) (x – a) = x2 – a
                          </div>
                          <div>
                            4.	Pada perpangkatan bentuk aljabar suku dua, koefisien sukusukunya ditentukan dengan segitiga Pascal.
                                  <br>
                                  (a + b)1 = a + b
                                  <br>
                                  (a + b)2 =a2 + 2ab +b2
                                  <br>
                                  (a + b)3 =a3 + 3a2b + 3ab2 + b3
                                  <br>
                                  dan seterusnya
                          </div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Persamaan dan Pertidaksamaan Satu Variabel',
        'isi_sub_bab' => '<div>1.	Pernyataan adalah kalimat yang dapat ditentukan nilai kebenarannya (bernilai benar atau bernilai salah).</div>
                          <div>2.	Himpunan penyelesaian dari kalimat terbuka adalah himpunan semua pengganti dari variabel-variabel pada kalimat terbuka sehingga kalimat tersebut bernilai benar.</div>
                          <div>3.	Persamaan linear satu variabel adalah kalimat terbuka yang dihubungkan oleh tanda sama dengan (=) dan hanya mempunyai satu variabel berpangkat satu. Bentuk umum persamaan linear satu variabel adalah ax + b = 0 dan a ≠ 0.</div>
                          <div>4.	Dua persamaan atau lebih dikatakan ekuivalen jika mempunyai himpunan penyelesaian yang sama dan dinotasikan dengan tanda “⇔”.</div>
                          <div>5.	Suatu persamaan dapat dinyatakan ke dalam persamaan yang ekuivalen dengan cara:
                                  <br>
                                  a.	menambah atau mengurangi kedua ruas dengan bilangan yang sama;
                                  <br>
                                  b.	mengalikan atau membagi kedua ruas dengan bilangan yang sama.
                          </div>
                          <div>6. Suatu ketidaksamaan selalu ditandai dengan salah satu tanda hubung berikut.
                                  <br>
                                  “<” untuk menyatakan kurang dari.
                                  <br>
                                  “>” untuk menyatakan lebih dari.
                                  <br>
                                  “≤” untuk menyatakan tidak lebih dari atau kurang dari atau sama dengan.
                                  <br>
                                  “≥” untuk menyatakan tidak kurang dari atau lebih dari atau sama dengan.
                          </div>
                          <div>6. Pertidaksamaan adalah kalimat terbuka yang menyatakan hubungan ketidaksamaan (>, <,≤, atau ≥).</div>
                          <div>7.	Untuk menentukan penyelesaian pertidaksamaan linear satu variabel, dapat dilakukan dalam dua cara sebagai berikut.
                                  <br>        
                                  a.	Mencari lebih dahulu penyelesaian persamaan yang diperoleh dari pertidaksamaan dengan mengganti tanda ketidaksamaan dengan tanda “=”.
                                  <br>
                                  b.	Menyatakan ke dalam pertidaksamaan yang ekuivalen.
                          </div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Perbandingan dan Aritmetika Sosial',
        'isi_sub_bab' => '<div> 1.	Harga pembelian, harga penjualan, untung, dan rugi.
                            <ol>
                              <li>Harga pembelian adalah harga barang dari pabrik, grosir, atau tempat lainnya.</li>
                              <li>Harga penjualan adalah harga barang yang ditetapkan oleh pedagang kepada pembeli.</li>
                              <li>Untung atau laba adalah selisih antara harga penjualan dengan harga pembelian jika harga penjualan lebih dari harga pembelian.
                                  <br>
                                  Untung = harga penjualan – harga pembelian.</li>
                              <li>Rugi adalah selisih antara harga penjualan dengan harga pembelian jika harga penjualan kurang dari harga pembelian.
                                  <br>
                                  Rugi = harga pembelian – harga penjualan.</li>
                            </ol>
                          <div>
                          <div>2.	Menentukan harga pembelian dan harga penjualan jika persentase untung atau rugi diketahui.
                            <ol>
                              <li>Jika untung maka berlaku</li>
                              <br>
                              harga penjualan = harga pembelian + untung
                              <br>
                              harga pembelian = harga penjualan – untung
                              <li>Jika rugi maka berlaku</li>
                              <br>
                              harga penjualan = harga pembelian – rugi
                              <br>
                              harga pembelian = harga penjualan + rugi
                            </ol>
                          </div>'

      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Garis dan Sudut',
        'isi_sub_bab' => '<div>1.	Sudut yang besarnya 90° disebut sudut siku-siku.
                              <br>
                              Sudut yang besarnya 180°  disebut sudut lurus.
                              <br>
                              Sudut yang besarnya antara 0° dan 90°  disebut sudut lancip.
                              <br>
                              Sudut yang besarnya antara 90° dan 180° disebut sudut tumpul.
                          </div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Segitiga dan Segiempat',
        'isi_sub_bab' => '<div>1.	Segitiga siku-siku dapat dibentuk dari sebuah persegi panjang yang dipotong menurut diagonalnya. 
                                  Besar salah satu sudut pada segitiga siku-siku adalah 90°.
                          </div>
                          <div>1.	Segitiga siku-siku dapat dibentuk dari sebuah persegi panjang yang dipotong menurut diagonalnya. 
                                  Besar salah satu sudut pada segitiga siku-siku adalah 90°.
                          </div>
                          <div>2. Sifat-sifat segitiga sama kaki:
                            <ol>
                              <li>dapat dibentuk dari dua buah segitiga siku-siku yang sama besar dan sebangun;</li>
                              <li>mempunyai satu sumbu simetri;</li>
                              <li>mempunyai dua buah sisi yang sama panjang;</li>
                              <li>mempunyai dua buah sudut yang sama besar;</li>
                              <li>dapat menempati bingkainya dengan tepat dalam dua cara.</li>
                            </ol>
                          </div>
                          <div>3. Sifat-sifat segitiga sama sisi:
                            <ol>
                              <li>mempunyai tiga  buah sumbu simetri;</li>
                              <li>mempunyai tiga buah sisi yang sama panjang;</li>
                              <li>mempunyai tiga buah sudut yang sama besar (60°);</li>
                              <li>dapat menempati bingkainya dengan tepat dalam enam cara.</li>
                            </ol>
                          </div>
                          <div>4.	Jumlah ketiga sudut segitiga adalah 180°.</div>
                          <div>5. Persegi panjang adalah bangun segi empat dengan panjang sisi yang berhadapan sama panjang dan sejajar.</div>
                          <div>6. Persegi adalah bangun segi empat yang memiliki empat sisi sama panjang dan empat sudut siku-siku.</div>'
      ]);
      
      MATEMATIKA KELAS 8

      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Faktorisasi Suku ALjabar',
        'isi_sub_bab' => '<div>1.	Bentuk aljabar satu suku disebut suku tunggal.
                              <br>
                              Bentuk aljabar dua suku disebut suku binom.
                              <br>
                              Bentuk aljabar banyak suku disebut polinom.
                          </div>
                          <div>2.	Bentuk aljabar yang mempunyai suku lebih dari suku dua atau mempunyai suku yang peubahnya berpangkat lebih dari dua disebut suku banyak.</div>
                          <div>3.	Bentuk perkalian suku dua:
                              <br>
                                (i) (a+b)(c+d) = (ac+bc) + (ad+bd)
                              <br>
                                (ii) (x+y)2 = x2 +2xy + y2
                              <br>
                                (iii) (x+y)(x-y) = x2 – y2
                              <br>
                                (iv) (x-y)2 = x2 – 2xy + y2
                          </div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Fungsi',
        'isi_sub_bab' => '<div>1.	Relasi dari himpunan  A ke himpunan B adalah hubungan yang memasangkan 
                                  anggota himpunan A dengan anggota himpunan B.</div>
                          <div>2.	Pemetaan atau fungsi dari himpunan A ke himpunan B adalah relasi khusus yang memasangkan 
                                  setiap anggota himpunan A dengan tepat satu anggota himpunan B.</div>
                          <div>3.	Relasi himpunan atau fungsi dapat dinyatakan dengan 
                                  diagram panah, diagram kartesius, dan himpunan pasangan terurut.</div>
                          <div>4.	Jika banyaknya anggota himpunan A = m dan 
                                  banyak anggota himpunan B = n maka banyaknya pemetaan dari A ke B sama dengan nm.</div>
                          <div>5.	Dua buah himpunan A dan B disebut berkorespondensi satu-satu 
                                  jika setiap anggota A berpasangan dengan tepat satu anggota B, dan setiap anggota B 
                                  berpasangan dengan tepat satu anggota B, sehingga n(A) = n(B).</div>
                          <div>6.	Banyaknya korespondensi satu-satu dari A ke B jika n(A) = n(B) = n </div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Persamaan Garis Lurus',
        'isi_sub_bab' => '<div>1.	Sumbu koordinat adalah dua garis yang saling tegak lurus dan berpotongan di satu titik pusat (0,0) 
                                  yang menjadi acuan dalam menentukan posisi atau letak suatu titik.</div>
                          <div>2.	Bentuk umum persamaan garis adalah:
                          <br>
                          a. y = mx yang melalui titik (0,0) dan titik (x, y)
                          <br>
                          b. y = mx + c yang melalui titik (0, c) dan titik (x, y + c)
                          </div>
                          <div>3.	Gradien garis yang sejajar sumbu x sama dengan 0.</div>
                          <div>4.	Gradien garis yang sejajar sumbu y tidak dide nisikan.</div>
                          <div>5.	Gradien dua buah garis yang sejajar adalah sama.</div>
                          <div>6.	Gradien dua buah garis yang saling tegak lurus adalah m1 x m2 = -1.</div>
                          <div>7.	Persamaan garis yang melalui titik (a, b) dan mempunyai gradien m adalah y – b = m(x – a).</div>
                          <div>8.	Persamaan garis yang melalui titik (x1, y1) dan (x2, y2) adalah y – y1 = m(x-x1) atau y – y2 = m(x – x2).</div>

      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'SPLDV',
        'isi_sub_bab' => '<div>1.	Persamaan linear dua variabel adalah persamaan yang dapat dituliskan 
                                  dalam bentuk ax + by = c, dimana x, y variabel dan a, b, c є R (a ≠ 0, b ≠ 0).</div>
                          <div>2.	Metode yang dapat digunakan untuk menyelesaikan sistem persamaan linear dua variabel adalah 
                                  metode grafik, metode substitusi, metode eliminasi, dan metode campuran (substitusi dan eliminasi).</div>
                          <div>3.	Himpunan penyelesaian sistem persamaan linear dua variabel 
                                  merupakan titik potong dari persamaan garis yang diketahui.</div>
                          <div>4.	Jika kedua garis tidak sejajar atau tidak berpotongan,
                                  maka himpunan penyelesaiannya merupakan himpunan kosong.</div>
                          <div>5. Jika kedua garis berimpit, maka himpunan penyelesaiannya tak terhingga banyaknya.</div>
                          <div>6.	Penyelesaian sistem persamaan linear dua variabel dengan metode substitusi ialah 
                                  mengganti salah satu variabel dalam persamaan yang satu dengan variabel pada persamaan lainnya.</div>
                          <div>7.	Penyelesaian sistem persamaan linear dua variabel 
                                  dengan metode eliminasi ialah menghapus, menghilangkan, atau mengeliminasi salah satu variabel.</div>       
                          <div>8. Model matematika merupakan penjabaran soal ke dalam kalimat matematika.</div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Dalil Pythagoras',
        'isi_sub_bab' => '<div>1.	Kuadrat suatu bilangan adalah perkalian antara bilangan tersebut dengan dirinya sendiri.</div>
                          <div>2.	Akar kuadrat suatu bilangan adalah bilangan tak negatif yang jika 
                                  dikuadratkan akan menghasilkan bilangan yang sama dengan bilangan semula.</div>
                          <div>3.	Teorema Pythagoras menyatakan bahwa kuadrat sisi miring 
                                  pada segitiga siku-siku sama dengan jumlah kuadrat sisi-sisinya.</div>
                          <div>4.	Menentukan jenis segitiga jika diketahui sisi-sisinya
                                <br>
                                  a.	Jika kuadrat sisi terpanjang sama dengan 
                                  jumlah kuadrat sisi-sisi lainnya maka segitiga tersebut merupakan segitiga siku-siku.
                                <br>
                                  b.	Jika kuadrat sisi terpanjang lebih kecil dari 
                                  jumlah kuadrat sisi-sisi lainnya maka segitiga tersebut merupakan segitiga lancip.
                                <br>
                                  c.	Jika kuadrat sisi terpanjang lebih besar dari 
                                  jumlah kuadrat sisi-sisi lainnya maka segitiga tersebut merupakan segitiga tumpul.
                          </div>
                          <div>5.	Tripel Pythagoras adalah bilangan bulat positif yang 
                                  kuadrat bilangan terbesarnya sama dengan jumlah kuadrat bilangan yang lainnya.</div>
                          <div>6.	Panjang diagonal sisi kubus yang panjang sisinya a adalah a√2.</div>
                          <div>7.	Panjang diagonal ruang kubus yang panjang sisinya a adalah a√3.</div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Lingkaran',
        'isi_sub_bab' => '<div>1.	Lingkaran adalah kumpulan titik-titik pada garis lengkung 
                                  yang mempunyai jarak yang sama terhadap pusat lingkaran.</div>
                          <div>2.	Daerah yang dibatasi oleh kumpulan 
                                  titik-titik  pada tepi lingkaran disebut daerah lingkaran (luas lingkaran).</div>
                          <div>3.	π (phi) adalah nilai perbandingan antara keliling lingkaran dengan diameter lingkaran.</div>
                          <div>4.	Jika panjang jari-jari sebuah lingkaran kedua adalah n kali jari-jari lingkaran pertama, 
                                  maka luas lingkaran kedua adalah n kali luas lingkaran pertama.</div>
                          <div>7.	Jika sudut keliling suatu lingkaran menghadap diameter lingkaran, 
                                  maka besar sudut keliling sama dengan 90°</div>
                          <div>8.	Jika sudut-sudut keliling menghadap busur yang sama, maka besar sudut-sudut keliling tersebut adalah sama</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Garis Singgung Lingkaran',
        'isi_sub_bab' => '<div>1.	Sifat garis singgung pada lingkaran adalah sebagai berikut.
                            <br>
                            a.	Melalui sebuah titik yang berada pada lingkaran hanya dapat dibuat satu garis singgung lingkaran.
                            <br>
                            b.	Garis singgung lingkaran tegak lurus dengan jari-jari lingkaran yang melalui titik singgungnya.
                            <br>
                            c.	Melalui sebuah titik yang berada di luar lingkaran hanya dapat dibuat dua garis singgung lingkaran melalui titik tersebut.
                          </div>
                          <div>2.	Garis singgung persekutuan adalah garis yang menyinggung dua lingkaran secara bersamaan. Ada dua jenis garis singgung persekutuan, 
                                  yaitu garis  singgung persekutuan dalam dan garis singgung persekutuan luar.</div>
                          <div>3.	Panjang garis singgung lingkaran adalah  g2 = p2 – r2
                                  <br>
                                  Panjang garis singgung persekutuan dalam dua lingkaran adalah d2  = s2 – (r1 + r2)2
                                  <br>
                                  Panjang garis singgung persekutuan luar dua lingkaran adalah l2 = s2 – (r1-r2)2
                                  <br>
                                  dimana r1 > r2 , dan
                                  <br>
                                  d  :  Panjang garis singgung persekutuan dalam dua lingkaran
                                  <br>
                                  g  : Panjang garis singgung lingkaran
                                  <br>
                                  p  : Jarak antara titik pusat lingkaran dengan titik yang berada di luar lingkaran
                                  <br>
                                  s  :  Jarak antara kedua pusat dua lingkaran
                                  <br>
                                  r1 :  Jari-jari lingkaran pertama
                                  <br>
                                  r2 :  Jari-jari lingkaran kedua
                          </div>'
      ]);

      DB::table('sub_babs')->insert([
      'id_bab' => 7,
      'judul_sub_bab' => 'Kubus dan Balok',
      'isi_sub_bab' => '<div>1.	Kubus adalah bangun ruang yang dibatasi oleh enam persegi yang kongruen (bentuk dan ukurannya sama). Sifat-sifat kubus:
                                <br>
                                a.	Jumlah panjang rusuknya = 12 s
                                <br>
                                b.	Semua diagonal bidangnya sama panjang, yaitu s√2
                                <br>
                                c.	Semua diagonal ruangnya sama panjang, yaitu s√3
                                <br>
                                d.	Bidang diagonalnya berbentuk persegi
                        </div>
                        <div>2.	Balok adalah bangun ruang yang dibatasi oleh 3 pasang persegi panjang yang kongruen (bentuk dan ukurannya sama). Sifat-sifat balok:
                                <br>
                                a.	Jumlah panjang rusuknya = 4 (p + l + t)
                                <br>
                                b.	Diagonal bidang yang saling berhadapan sama panjang
                                <br>
                                c.	Semua diagonal ruangnya sama panjang, yaitu √p^2+l^2+t^2
                                <br>
                                d.	Bidang diagonalnya berbentuk persegi panjang
                        </div>
                        <div>4.	Jaring-jaring kubus adalah rangkaian enam buah persegi yang 
                                apabila dilipat menurut persekutuan dua persegi akan membentuk bangun ruang kubus.</div>
                        <div>5.	Jaring-jaring balok adalah rangkaian enam buah persegi panjang yang apabila dilipat 
                                menurut persekutuan dua persegi panjang akan membentuk bangun ruang balok.</div>
                        <div>6.	Luas permukaan kubus = 6s2</div>
                        <div>7.	Luas permukaan balok = 2 [(p × l) + (p × t) + (l × t)]</div>
                        <div>8.	Volume kubus = s3</div>
                        <div>9.	Volume balok = p × l × t</div>
                        <div>10.	Perubahan volume kubus dan balok dapat dilakukan 
                        dengan cara menghitung selisih antara volume sebelum perubahan dengan volume setelah perubahan</div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Prisma dan Limas',
        'isi_sub_bab' => '<div>1.	Prisma adalah bangun ruang yang memiliki sepasang bidang sejajar yang kongruen,  
                                  serta bidang-bidang lainnya 
                                  diperoleh dengan menghubungkan titik-titik sudut dari dua bidang yang sejajar.</div>
                          <div>2.	Limas adalah bangun ruang yang memiliki satu alas dan bidang-bidang 
                                  lainnya berbentuk segitiga yang bertemu pada satu titik puncak.</div>
                          <div>3.	Menggambar prisma dan limas akan lebih mudah jika menggunakan kertas berpetak.</div>
                          <div>4.	Jaring-jaring prisma dan limas merupakan rangkaian dari bangun datar yang apabila 
                                  dilipat menurut garis persekutuan dua bidangnya akan membentuk prisma dan limas tersebut.</div>
                          <div>5.	Luas permukaan prisma = (2 × luas alas) + (keliling alas × tinggi prisma).</div>
                          <div>6.	Luas permukaan limas = luas alas + jumlah luas semua segitiga tegak.</div>
                          <div>7.	Volume prisma = luas alas × tinggi prisma</div>
                          <div>8.	Volume limas =  1/3 ×  luas alas × tinggi limas</div>'
      ]);

      MATEMATIKA KELAS 9

      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Kesebangunan',
        'isi_sub_bab' => '<div>1.	Dua bangun yang bentuk dan ukurannya sama dinamakan dua bangun yang kongruen.</div>
                          <div>2.	Dua bangun datar yang sebangun (selain lingkaran) selalu memiliki ciri-ciri sebagai berikut:
                                  <br>
                                  a.	sisi-sisi yang seletak atau bersesuaian adalah sebanding, artinya perbandingan panjang sisi-sisi itu sama,
                                  <br>
                                  b.	sudut-sudut yang seletak atau bersesuaian adalah sama besar.
                          </div>
                          <div>3.	Dua segitiga akan kongruen jika memenuhi salah satu syarat berikut ini.
                                  <br>
                                  a.	Ketiga sisi pada segitiga pertama sama panjang dengan ketiga sisi pada segitiga kedua (s, s, s)
                                  <br>
                                  b.	Dua sisi pada segitiga pertama sama dengan dua sisi pada segitiga kedua, dan kedua sudut apitnya sama (s, sd, s)
                                  <br>
                                  c.	Dua sudut dalam segitiga pertama sama dengan dua sudut dalam segitiga kedua. Sisi yang menjadi salah satu kaki sudut-sudut itu sama (sd, s, sd).
                          </div>
                          <div>4.	Dua segitiga akan sebangun jika memenuhi salah satu syarat berikut ini.
                                  <br>
                                  a.	Sisi-sisi yang seletak atau bersesuaian mempunyai perbandingan yang sama (s,s, s).
                                  <br>
                                  b.	Dua buah sudutnya sama besar (sd, sd).
                                  <br>
                                  c.	Kedua segitiga itu memiliki satu sudut sama besar dan kedua sisi yang mengapitnya mempunyai perbandingan yang sama (s, sd, s).
                          </div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Bangun Sisi Lengkung',
        'isi_sub_bab' => '<div>1.	Tabung adalah suatu bangun yang dibatasi oleh dua bidang sisi yang sejajar dan kongruen berbentuk lingkaran 
                                  serta bidang sisi tegak berbentuk selongsong yang disebut selubung</div>
                          <div>2. Luas permukaan tabung =  2 × luas alas × tinggi = 2πr (r+r)
                                  <br>
                                  Volume tabung  =  luas alas × tinggi = πr^2 t
                          </div>
                          <div>3.	Kerucut adalah bangun ruang yang dibatasi oleh 
                                  bidang sisi alas yang berbentuk lingkaran dan bidang sisi lain yang disebut selimut kerucut.
                                  <br>
                                  Luas permukaan kerucut  =  luas alas + luas selimut = 2πr(r+t)
                          </div>
                          <div>4.	Bola adalah bangun ruang yang dibatasi oleh bidang lengkung.
                                  <br>
                                  Luas permukaan bola = 2πr^2
                                  <br>
                                  Volume bola =  4/3πr3
                          </div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Pengolahan dan Penyajian Data',
        'isi_sub_bab' => '<div>1.	Statistika merupakan ilmu yang mempelajari metode 
                                  pengumpulan, pengolahan, dan penarikan kesimpulan dari data.</div>
                          <div>2.	Populasi adalah kumpulan objek yang menjadi sasaran penelitian dan memiliki karakteristik yang sama.
                          </div>
                          <div>3.	Sampel adalah bagian dari populasi yang diteliti 
                                  secara langsung dan dapat digunakan sebagai dasar penarikan kesimpulan.
                          </div>
                          <div>4.	Data tunggal merupakan datum-datum yang memiliki satuan yang sama. Data tunggal dibagi dua, yaitu data tunggal biasa dan data tunggal berbobot.
                                  <br>
                                  a.	Data tunggal biasa adalah data tunggal yang disajikan tanpa menggunakan tabel frekuensi.
                                  <br>
                                  b.	Data tunggal berbobot adalah data tunggal yang disajikan menggunakan tabel frekuensi.
                          </div>
                          <div>5.	Jangkauan adalah selisih antara nilai terbesar dan nilai terkecil dalam satu kelompok nilai.</div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Peluang',
        'isi_sub_bab' => '<div>1.	Ruang sampel adalah himpunan semua hasil yang mungkin dari suatu percobaan dan titik sampel adalah setiap anggota ruang sampel. 
                                  Ruang sampel dapat disusun menggunakan diagram pohon dan tabel.</div>
                          <div>2.	Peluang kejadian A dirumuskan sebagai:
                                <br>
                                  P(A) = n(A)/n(S), dengan P(A) menyatakan peluang kejadian A, n(A) menyatakan banyak kejadian acak A, dan n(S) menyatakan banyak titik sampel yang mungkin.
                          </div>
                          <div>3.	Batas-batas nilai peluang kejadian A dituliskan sebagai:
                                <br>
                                  0 ≤ P (A) ≤ 1, dengan P (A) = 0 menyatakan peluang kemustahilan dan P(A) = 1 menyatakan peluang kepastian.
                          </div>
                          <div>4.	Frekuensi harapan kejadian A dinotasikan sebagai E(A) dan dirumuskan sebagai:
                                <br>
                                E(A) = P(A) × N, dengan N adalah banyak percobaan yang dilakukan.
                          </div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Bilangan Berpangkat dan Bentuk Akar',
        'isi_sub_bab' => '<div>1. a^0 = 1, a^-n = 1/a^n </div>
                          <div>2.	Sifat-sifat bilangan berpangkat bulat:
                                <br>
                                 1. a^m . a^n = a^m+n
                                <br>
                                 2. a^m : a^n = a^m-n, a tidak sama dengan 0
                                <br>
                                 3. a^n . b^n = (a.b)^n
                                <br>
                                 4. a^m : b^m = (a:b)^m, b tidak sama dengan 0
                                <br>
                                 5. (a^m)^n = a^m.n
                          </div>
                          <div>3. Bentuk Akar dan Sekawan: 
                                <br>
                                1. √a -> √a
                                <br>
                                2. √a - √b -> √a + √b
                                <br>
                                3. a - √b -> a + √b
                                <br>
                                4. √a - b -> √a +b
                          </div>'
      ]);

      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Barisan dan Deretr',
        'isi_sub_bab' => '<div>1.	Barisan bilangan (dituliskan U1, U2, U3, . . . , Un) adalah sekumpulan bilangan yang tersusun 
                                  menurut pola tertentu dan setiap unsur bilangan yang tersusun itu disebut suku barisan. </div>
                          <div>2.	Deret bilangan adalah jumlah dari barisan bilangan.
                                  <br>
                                  Dituliskan Sn = U1 + U2 + U2 + . . . + Un
                          </div>
                          <div>3.	Barisan aritmetika
                                  <br>
                                  U1, U2, U3, . . . , Un–1, Un disebut barisan aritmetika jika U2 – U1 = U3 – U2  = Un – Un-1 = b
                                  <br>
                                  Suku  ke-n barisan aritmetika adalah a, (a + b), (a + 2b), . . . ,  [a + (n – 1) b].
                          </div>
                          <div>4. Deret aritmetika
                                  <br>
                                  a + (a + b) + (a + 2b) + . . .  + (a + (n – 1) b) disebut . . . aritmetika.
                                  <br>
                                  Rumus jumlah n suku adalah  Sn = n/2 (a + U) = . . . .
                                  <br>
                                  Selain itu berlaku hubungan Un = Sn – Sn-1
                          </div>
                          <div>5. Barisan geometri
                                  <br>
                                  U1, U2, U3,…,Un-1, Un disebut barisan geometri jika r =  U2/U1 = U3/U2 =...= Un/Un-1
                                  <br>
                                  Suku ke-n barisan geometri adalah a, ar, ar2,…,arn-1
                                  <br>
                                  Rumus suku ke-n adalah  Un = . . . .
                                  <br>
                                  a = . . . .
                                  <br>
                                  r = . . . .
                                  <br>
                                  n = . . . .
                                  <br>
                                  Barisan geometri akan naik jika Un . . . Un–1 turun jika Un . . . Un-1 dan bergantian turun naik jika r < 0.
                          </div>
                          <div>6.	Deret geometri
                                  a + ar2 + ar3 + . . . + arn-1  disebut deret geometri.
                                  Rumus jumlah n suku adalah
                                  Sn = a(...^n-1)/r-1 , jika r . . . 1
                                  Sn = a(...-...^n)/1-r , jika r . . . 1
                                  Selain itu berlaku hubungan Un = Sn – Sn-1
                          </div>'
      ]);
      */ 
    }
}
