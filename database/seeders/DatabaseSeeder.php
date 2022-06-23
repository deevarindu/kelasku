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

      DB::table('sub_babs')->insert([
        'id_bab' => 1,
        'judul_sub_bab' => 'Bercerita',
        'isi_sub_bab' => '<div>Langkah-langkah menyimpulkan isi berita adalah memahami isi berita dengan menjawab singkat dan tepat pertanyaan-pertanyaan berikut.</div><ol><li>Apa yang terjadi? (what)</li><li>Siapa yang terlibat? (who)</li><li>Di mana terjadinya? (where)</li><li>Mengapa terjadi? (why)</li><li>Bagaimana kejadiannya? (how)</li></ol><div><br></div><div>Membaca memindai merupakan cara menemukan informasi dan bacaan (kamus, indeks, ensiklopedi, yellow pages, atau buku telepon dengan melihat halaman demi halaman dan berhenti pada bagian yang dimaksud.</div><div>Untuk bercerita dengan baik, ada beberapa hal yang diperhatikan.</div><ol><li>Cerita runtut,</li><li>Lafal jelas dan tepat,</li><li>Intonasi tepat,</li><li>Gestur tepat dan berguna.</li></ol><div><strong>Ciri-ciri pantun:</strong></div><ol><li>setiap bait terdiri atas 4 baris,</li><li>setiap baris terdiri atas 8–12 suku kata,</li><li>&nbsp;bunyi akhir setiap baris (rima) bersajak a b a b,</li><li>baris 1 dan 2 merupakan sampiran, baris 3 dan 4 merupakan isi.</li></ol><div><br></div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 1,
        'judul_sub_bab' => 'Pertunjukan',
        'isi_sub_bab' => '<div>Hal-hal yang harus diperhatikan dalam menceritakan pengalaman antara lain sebagai berikut.</div><ul><li>Menggunakan pilihan kota/diksi yang tepat.</li><li>Menggunakan kalimat efektif dan menarik.</li></ul><div>Langkah-langkah menceritakan pengalaman pribadi.</div><ol><li>Mengingat-ingat secara detail/terperinci pengalaman yang paling mengesankan.</li><li>Menulis kata-kata kunci untuk mempermudah merangkai alur cerita.</li><li>Menguraikan kejadian serta terperinci dan lengkap.</li><li>Menggunakan diksi yang tepat.</li><li>Menggunakan kalimat yang efektif dan menarik.</li></ol><div>Pengalaman-pengalaman pribadi yang mengesankan dapat kamu tuangkan dalam buku harian dengan pengungkapan dan bahasa yang baik dan benar.</div><div>Hal-hal yang harus diperhatikan dalam menceritakan kembali cerita anak.</div><ol><li>Judul cerita.</li><li>Hal-hal yang menarik dari cerita.</li><li>Hal-hal yang tidak menarik dari cerita.</li><li>Tokoh-tokoh dalam cerita.</li><li>Watak para tokoh.</li><li>Runtutan/akhir cerita.</li><li>Konflik dalam cerita.</li><li>Penyelesaian dalam cerita.</li></ol><div>Dalam menceritakan kembali cerita anak, hendaknya kamu menggunakan pilihan kata yang tepat dan gaya yang menarik.</div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 1,
        'judul_sub_bab' => 'Pengalaman yang Mengesankan',
        'isi_sub_bab' => '<div>Membaca cepat adalah membaca dengan teknik cepat tanpa mengurangi pemahaman terhadap isi bacaan.</div><div>Hal-hal yang harus diperhatikan dalam membaca cepat antara lain:</div><ul><li>metode jarak mata (memperluas jangkauan mata dan mengurangi regresi),</li><li>menghilangkan kebiasaan membaca dengan bersuara,</li><li>meningkatkan kosentrasi.</li></ul><div>Surat pribadi merupakan surat yang ditulis untuk kepentingan pribadi. Isi surat berupa bentuk ungkapan perasaan pribadi yang dituangkan dalam bahasa tulis. Bahasa surat hendaknya mudah dipahami, sopan, ramah, dan sistematis.</div><div>Sistematika surat pribadi terbagi ke dalam bagian pendahuluan, bagian isi, dan bagian penutup.</div><div>Dongeng termasuk dalam salah satu bentuk sastra lama yang disebarkan secara lisan dan tidak diketahui siapa pengarangnya (anonim). Dongeng dapat dipahami dari tema dongeng dan hal-hal menarik dari dongeng tersebut.</div><div>Bercerita dengan alat peraga bertujuan untuk memudahkan pendengar memahami hal/petunjuk yang rumit.</div><div>Hal-hal yang perlu diperhatikan dalam bercerita dengan alat peraga.</div><ul><li>Alat peraga sesuai dengan cerita.</li><li>Alat peraga hendaknya mempermudah pemahaman pendengar/penonton.</li><li>Tentukan alat peraga sesuai dengan kebutuhan.</li><li>Peragakan alat peraga sesuai dengan alur cerita.</li></ul>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 2,
        'judul_sub_bab' => 'Kegiatan',
        'isi_sub_bab' => '<div>Intonasi adalah kuat lemahnya tekanan suara ketika membaca.</div><div>Hal-hal yang harus diperhatikan dalam menyampaikan pengumuman secara lisan.</div><ul><li>Mengucapkan lafal dengan tepat.</li><li>Menggunakan intonasi dengan tepat.</li><li>Menggunakan kalimat yang lugas dan sederhana.</li></ul><div>Dongeng merupakan cerita prosa yang bersifat khayalan. Berkembang sebagai sastra lisan yang bersifat anonim. Dongeng mulai disampaikan secara tertulis setelah masyarakat mengenal tulisan.</div><div>Langkah-langkah menulis kembali isi dongeng yang sudah dibaca/didengarkan&nbsp; antara lain sebagai berikut.</div><ol><li>Dengarkan pembacaan dongeng, kemudian bacalah kembali dengan saksama dan teliti!</li><li>Catatlah hal-hal penting dalam dongeng!</li><li>Perhatikan alur, tokoh, latar, karakter tokoh, dan unsur pendukung lainnya!</li><li>Tulislah isi dongeng dengan menggunakan bahasamu sendiri!&nbsp;</li></ol>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 2,
        'judul_sub_bab' => 'Perilaku',
        'isi_sub_bab' => '<div>Pokok-pokok berita dapat ditemukan dengan menganalisis pertanyaan-pertanyaan berikut.</div><ul><li>Peristiwa apa yang terjadi?</li><li>Siapa pelaku dalam peristiwa tersebut?</li><li>Di mana tempat terjadinya peristiwa?</li><li>Kapan waktu terjadinya peristiwa?</li><li>Apa penyebab kejadian tersebut?</li><li>Bagaimana proses terjadinya peristiwa?</li></ul><div>Pengumuman merupakan pemberitahuan tentang sesuatu kepada khalayak. Hal-hal pokok dalam pengumuman.</div><ul><li>Pengumuman ditujukan kepada siapa.</li><li>Maksud/isi pengumuman.</li><li>Asal pengumuman.</li></ul><div>Hal-hal yang perlu diperhatikan dalam menyusun pengumuman.</div><ol><li>Bentuk/model pengumuman harus menarik.</li><li>Bahasa yang digunakan jelas dan persuasif (membujuk).</li><li>Maksud/isi mudah dipahami.</li><li>Khalayak yang dituju dinyatakan secara eksplisit (terang-terangan).</li></ol><div>Hal-hal yang perlu diperhatikan dalam mengomentari buku cerita:</div><ol><li>tema yang diangkat,</li><li>penokohan dan perwatakan tokoh,</li><li>kelemahan-kelemahan isi buku, dan</li><li>kelebihan-kelebihan isi buku.</li></ol>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 2,
        'judul_sub_bab' => 'Cita-Cita',
        'isi_sub_bab' => '<div>Wawancara adalah proses dialog antara orang yang mencari informasi dengan narasumber.</div><div>Narasumber merupakan orang yang mempunyai kemampuan lebih dalam bidang tertentu/ahli/pakar.</div><div>Sebelum kamu menceritakan tokoh idolamu, perhatikan langkah-langkah berikut!</div><ol><li>carilah data-data dan identitas tentang tokoh idolamu!</li><li>tulislah tema yang menurutmu paling menarik dari tokoh idolamu.</li></ol><div>Sebelum menulis riwayat hidup tokoh idolamu, data-data yang perlu kamu cari antara lain:</div><ul><li>prestasi daslam bidangnya</li><li>perilaku/sikap dalam bergaul</li><li>keistimewaan tokoh</li><li>prestasi yang membanggakan untuk bangsa dan negara</li></ul><div>Hal-hal yang perlu diperhatikan dalam menulis puisi adalah:</div><ol><li>gaya bahasa</li><li>diksi/pilihan kata</li><li>irama</li><li>Langkah-langkah menulis puisi:</li><li>pilih objek inspirasi!</li><li>ungkapkan perasaan dengan kata-kata yang kamu suka!</li><li>susun kata-kata tersebut menjadi baik!</li><li>baca dan hayati kata-kata yang kamu pilih!</li></ol>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 2,
        'judul_sub_bab' => 'Kerja Keras',
        'isi_sub_bab' => '<div>Membaca intensif adalah membaca sebuah teks bacaan secara mendalam untuk memperoleh pemahaman mengenai isi teks bacaan tersebut.</div><div>Gagasan utama merupakan pikiran utama yang dikembangkan sehingga menjadi teks bacaan.</div><div>Untuk mengubah teks wawancara menjadi narasi kamu harus mengubah kalimat langsung menjadi kalimat tidak langsung.</div><div>Nada, irama, dan diksi dalam puisi mencerminkan isi dari puisi itu sendiri.</div><div>Menulis puisi diawali dengan pencarian ide/gagasan melalui objek-objek yang bisa menciptakan inspirasi. Ide tersebut kemudian diungkapkan dengan bahasa yang padat, indah, dan sarat makna.&nbsp;</div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 3,
        'judul_sub_bab' => 'Mengungkapkan Pendapat dan Imajinasi',
        'isi_sub_bab' => '<div>Wawancara merupakan percakapan tanya jawab yang dilakukan oleh&nbsp; dua orang atau lebih tentang suatu tema antara penanya dan narasumber.</div><div>Penanya adalah pewawancara yang mencari/menanyakan informasi dari tema yang dibicarakan.</div><div>Narasumber adalah orang yang diwawancarai/memberikan informasi. Narasumber biasanya seorang profesional, ahli, tokoh, atau pakar dalam tema yang sedang dibicarakan.</div><div>Untuk dapat menuliskan hal-hal penting dari wawancara yang kamu dengar, perhatikan 2 hal berikut ini!</div><ol><li>pertanyaan apa yang diajukan oleh penanya, dan</li><li>jawaban narasumber mengenai pertanyaan tersebut.</li></ol><div>Biografi merupakan catatan riwayat hidup seorang tokoh yang ditulis dalam bentuk buku.</div><div>Ciri-ciri cerpen:</div><ol><li>panjang cerita tidak lebih dari 10.000 kata,</li><li>mengandung satu gagasan utama,</li><li>menyajikan kejadian yang paling menarik, dan</li><li>berakhir dengan penyelesaian.</li></ol><div>Hal-hal yang dinilai dalam menanggapi cara pembacaan cerpen antara lain:</div><ol><li>power/kekuatan vokal,</li><li>intonasi,</li><li>pelafalan,</li><li>interpretasi,</li><li>teknik representatif/teknik pembacaan, dan</li><li>penampilan umum.</li></ol>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 3,
        'judul_sub_bab' => 'Tokoh Idola',
        'isi_sub_bab' => '<div>Tabel atau diagram merupakan alat pelengkap yang akan memudahkan kita untuk menemukan informasi secara tepat dan cepat.</div><div>Tabel merupakan daftar berisi ikhtisar data atau informasi yang tersusun urut ke bawah dalam lajur dan deret tertentu dengan garis pembatas.</div><div>Diagram merupakan sketsa untuk menunjukkan atau menerangkan sesuatu. Data disampaikan melalui gambar.</div><div>Bentuk-bentuk diagram antara lain diagram gambar, diagram lingkaran, diagram batang, dan diagram pohon.</div><div>Memo merupakan surat dinas yang isinya singkat dan dipakai secara intern dalam suatu instansi atau lembaga. Memo ini bersifat resmi. Pesan singkat yang tidak resmi biasanya digunakan dalam komunikasi keluarga.</div><div>Latar cerpen merupakan kondisi yang melatarbelakangi cerita dalam cerpen. Latar ini meliputi latar tempat, latar waktu, dan latar suasana. Latar dapat diambil dari khasanah imajinasi pengarang atau realitas sosial di lingkungan sekitar.</div><div>Agar intonasi membaca teks perangkat upacara tepat, usahakan penjedaan dalam membaca juga tepat.</div>'
      ]);
      DB::table('sub_babs')->insert([
        'id_bab' => 3,
        'judul_sub_bab' => 'Sosial dan Budaya',
        'isi_sub_bab' => '<div>Hal-hal yang perlu diperhatikan dalam percakapan melalui telepon adalah:</div><ol><li>penggunaan kalimat yang efektif dan</li><li>penggunaan bahasa yang santun.</li></ol><div>Hal-hal yang harus diperhatikan dalam membaca/menanggapi pembacaan puisi:</div><div>irama, yaitu tinggi rendahnya suara;</div><ol><li>volume, yaitu kuat lemah, dan keras bentuknya suara;</li><li>mimik, yaitu ekspresi wajah; serta</li><li>kinesik, yaitu gerak kecil-kecil dari tangan atau wajah.</li></ol>'
      ]);
      DB::table('sub_babs')->insert([
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
      DB::table('sub_babs')->insert([
        'id_bab' => 7,
        'judul_sub_bab' => 'Bilangan Bulat',
        'isi_sub_bab' => '<div>Bilangan bulat terdiri dari bilangan bulat negatif, nol, dan bilangan bulat positif.</div><div>Sifat-sifat penjumlahan pada bilangan bulat.&nbsp;</div><div><strong>Sifat tertutup</strong><br> Untuk setiap bilangan bulat a dan b, berlaku<br> a + b = c dengan c juga bilangan bulat.</div><div><strong>Sifat komutatif</strong><br> Untuk setiap bilangan bulat a dan b, selalu berlaku<br> a + b = b + a.</div><div><strong>Sifat asosiatif</strong><br> Untuk setiap bilangan bulat a, b, dan c selalu berlaku<br> (a + b) + c = a + (b + c).</div><div><strong>Mempunyai unsur identitas</strong><br> Untuk sebarang bilangan bulat a, selalu berlaku<br> a + 0 = 0 + a. Bilangan nol (0) merupakan unsur identitas pada penjumlahan.</div><div><strong>Mempunyai invers</strong><br> Untuk setiap bilangan bulat a, selalu berlaku<br> a + (–a) = (–a) + a = 0. Invers dari a adalah –a, sedangkan invers dari –a adalah a.<br><br>Jika a dan b bilangan bulat maka berlaku a – b = a + (–b).</div><div>Operasi pengurangan pada bilangan bulat berlaku sifat tertutup.<br><br></div><div>Jika n adalah sebarang bilangan bulat positif maka,</div><blockquote><em>n x a = a + a + ... + a</em></blockquote><div>Jika p dan q bilangan bulat maka,</div><blockquote><em>p x q = pq<br>(–p) x q = –(p x q) = –pq<br>p x (–q) = –(p x q) = –pq<br>(–p) x&nbsp; (–q) = p x q = pq</em></blockquote><div>Untuk setiap p, q, dan r bilangan bulat berlaku sifat</div><ul><li>tertutup terhadap operasi perkalian;</li><li>komutatif: p x q = q x p;</li><li>asosiatif: (p x q) x r = p x&nbsp; (q x r);</li><li>distributif perkalian terhadap penjumlahan: p x (q + r) = (p x q) + (p x r);</li><li>distributif perkalian terhadap pengurangan: p x (q – r) = (p x q) – (p x r).</li></ul><div>Unsur identitas pada perkalian adalah 1, sehingga untuk setiap bilangan bulat p berlaku p x&nbsp; 1 = 1 x p = p.<br>Pembagian merupakan operasi kebalikan dari perkalian.<br>Apabila dalam suatu operasi hitung campuran bilangan bulat tidak terdapat tanda kurung, pengerjaannya berdasarkan sifat-sifat operasi hitung berikut.</div><ol><li>Operasi penjumlahan (+) dan pengurangan (–) sama kuat, artinya operasi yang terletak di sebelah kiri dikerjakan terlebih dahulu.</li><li>Operasi perkalian (x) dan pembagian (:) sama kuat, artinya operasi yang terletak di sebelah kiri dikerjakan terlebih dahulu.</li><li>Operasi perkalian (x) dan pembagian (:) lebih kuat daripada operasi penjumlahan (+) dan pengurangan (–), artinya operasi perkalian (x) dan pembagian (:) dikerjakan terlebih dahulu daripada operasi penjumlahan (+) dan pengurangan (–).</li></ol>'
      ]);
    }
}
