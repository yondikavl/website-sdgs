<?php

namespace Database\Seeders;

use App\Models\SubIndikator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subindikator = [
            [
                'indikator_id' => 1, 'kode_sub' => '1.1.1',  "nama_sub" => "Tingkat kemiskinan ekstrim",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.2.1',  "nama_sub" => "Persentase penduduk yang hidup di bawah garis kemiskinan nasional, menurut jenis kelamin dan kelompok umur.",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.2.2',  "nama_sub" => "Persentase laki-laki, perempuan dan anak-anak dari semua usia, yang hidup dalam kemiskinan dalam berbagai dimensi, sesuai dengan definisi nasional.",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.3.1',  "nama_sub" => "Proporsi penduduk yang menerima program perlindungan sosial, menurut jenis kelamin, untuk kategori kelompok semua anak, pengangguran, lansia, penyandang difabilitas, ibu hamil/melahirkan, korban kecelakaan kerja, kelompok miskin dan rentan.",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.3.1.(a)',  "nama_sub" => "Proporsi peserta jaminan kesehatan melalui SJSN Bidang Kesehatan.",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.3.1.(b)',  "nama_sub" => "Proporsi peserta Program Jaminan Sosial Bidang Ketenagakerjaan.",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.4.1',  "nama_sub" => "Proporsi penduduk/rumah tangga dengan akses terhadap pelayanan dasar.",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.4.2',  "nama_sub" => "Proporsi dari penduduk dewasa yang mendapatkan hak atas tanah yang didasari oleh dokumen hukum dan yang memiliki hak atas tanah berdasarkan jenis kelamin dan tipe kepemilikan.",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.5.1',  "nama_sub" => "Jumlah korban meninggal, hilang, dan terkena dampak bencana per 100.000 orang.",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.5.2',  "nama_sub" => "Jumlah kerugian ekonomi langsung akibat bencana terhadap GDP.",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.5.3',  "nama_sub" => "Rencana dan implementasi strategi nasional pengurangan risiko bencana yang selaras dengan the Sendai Framework for Disaster Risk Reduction 2015–2030",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.5.4',  "nama_sub" => "Proporsi pemerintah daerah yang mengadopsi dan menerapkan strategi daerah pengurangan risiko bencana yang selaras dengan strategi nasional pengurangan risiko bencana",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.a.1',  "nama_sub" => "Proporsi sumber daya yang dialokasikan oleh pemerintah secara langsung untuk program pemberantasan kemiskinan.",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.a.2',  "nama_sub" => "Pengeluaran untuk layanan pokok (pendidikan, kesehatan dan perlindungan sosial) sebagai persentase dari total belanja pemerintah.",
            ],
            [
                'indikator_id' => 1, 'kode_sub' => '1.b.1',  "nama_sub" => "Proporsi pengeluaran rutin dan pembangunan pada sektor- sektor yang memberi manfaat pada kelompok perempuan, kelompok miskin dan rentan.",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.1.1',  "nama_sub" => "Prevalensi Ketidakcukupan Konsumsi Pangan (Prevalence of Undernourishment).",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.1.2',  "nama_sub" => "Prevalensi penduduk dengan kerawanan pangan sedang atau berat, berdasarkan pada Skala Pengalaman kerawanan pangan",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.2.1',  "nama_sub" => "Prevalensi stunting (pendek dan sangat pendek) pada anak dibawah lima tahun/balita.",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.2.2',  "nama_sub" => "Prevalensi wasting (berat badan/tinggi badan) anak pada usia kurang dari 5 tahun, berdasarkan tipe.",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.2.2.(a)',  "nama_sub" => "Kualitas konsumsi pangan yang diindikasikan oleh skor Pola Pangan Harapan (PPH).",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.2.3',  "nama_sub" => "Prevalensi anemia pada ibu hamil usia 15-49 tahun.",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.3.1',  "nama_sub" => "Volume produksi per tenaga kerja menurut kelas usaha tani tanaman/ peternakan/ perikanan/ kehutanan",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.3.1.(a)',  "nama_sub" => "Nilai tambah pertanian per tenaga kerja menurut kelas usaha tani tanaman/ peternakan/ perikanan/ kehutanaan.",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.3.2',  "nama_sub" => "Rata-rata pendapatan produsen pertanian skala kecil menurut subsektor",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.4.1',  "nama_sub" => "areal pertanian produktif dan berkelanjutan.",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.4.1.(a)',  "nama_sub" => "Proporsi luas lahan pertanian yang ditetapkan sebagai kawasan pertanian pangan berkelanjutan.",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.5.1',  "nama_sub" => "Jumlah sumber daya genetik tanaman dan hewan untuk pangan dan pertanian yang disimpan di fasilitas konservasi, baik jangka menengah ataupun jangka panjang.",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.5.2',  "nama_sub" => "Proporsi ras ternak lokal yang berisiko punah.",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.a.1',  "nama_sub" => "Indeks orientasi pertanian (IOP) untuk pengeluaran pemerintah.",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.a.2',  "nama_sub" => "Total bantuan pembangunan (ODA) dan bantuan lain untuk sektor pertanian.",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.b.1',  "nama_sub" => "Subsidi ekspor pertanian.",
            ],
            [
                'indikator_id' => 2, 'kode_sub' => '2.c.1',  "nama_sub" => "Indikator anomali harga pangan.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.1.1',  "nama_sub" => "Angka Kematian Ibu (AKI).",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.1.2',  "nama_sub" => "Proporsi perempuan pernah kawin umur 15-49 tahun yang proses melahirkan terakhirnya (a) ditolong oleh tenaga kesehatan terlatih; (b) di fasilitas kesehatan.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.2.1',  "nama_sub" => "(a) Angka Kematian Balita (AKBa); (b) Angka Kematian Bayi (AKB) per 1000 kelahiran hidup",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.2.2',  "nama_sub" => "Angka Kematian Neonatal (AKN) per 1000 kelahiran hidup.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.3.1',  "nama_sub" => "Jumlah infeksi baru HIV per 1000 penduduk tidak terinfeksi",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.3.2',  "nama_sub" => "Insiden Tuberkulosis (ITB) per 100.000 penduduk",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.3.3',  "nama_sub" => "Kejadian Malaria per 1000 orang.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.3.3.(a)',  "nama_sub" => "Jumlah kabupaten/kota yang mencapai eliminasi malaria.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.3.4',  "nama_sub" => "Insiden Hepatitis B per 100.000 penduduk.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.3.5',  "nama_sub" => "Jumlah orang yang memerlukan intervensi terhadap penyakit tropis yang terabaikan (a) Filariasis dan (b) Kusta",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.3.5.(a)',  "nama_sub" => "Jumlah kabupaten/kota dengan eliminasi kusta.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.3.5.(b)',  "nama_sub" => "Jumlah kabupaten/kota endemis filariasis yang mencapai eliminasi.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.4.1',  "nama_sub" => "Kematian akibat penyakit kardiovaskuler, kanker, diabetes atau penyakit pernapasan kronis.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.4.1.(a)',  "nama_sub" => "Persentase merokok penduduk usia 10-18 tahun.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.4.1.(b)',  "nama_sub" => "Prevalensi tekanan darah tinggi",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.4.1.(c)',  "nama_sub" => "Prevalensi obesitas pada penduduk umur ≥18 tahun.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.4.2',  "nama_sub" => "Angka kematian (insidens rate) akibat bunuh diri.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.5.1',  "nama_sub" => "Cakupan intervensi pengobatan (farmakologi, psikososial, rehabilitasi dan layanan pasca intervensi) bagi gangguan penyalahgunaan zat.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.5.1.(a)',  "nama_sub" => "Jumlah penyalahguna napza yang mendapatkan pelayanan rehabilitasi medis.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.5.1.(b)',  "nama_sub" => "Jumlah yang mengakses layanan pasca rehabilitasi.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.5.2',  "nama_sub" => "Konsumsi alkohol (liter per kapita) oleh penduduk umur ≥15 tahun dalam satu tahun terakhir",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.6.1',  "nama_sub" => "Angka kematian akibat cedera fatal kecelakaan lalu lintas.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.7.1',  "nama_sub" => "Proporsi perempuan usia reproduksi (15-49 tahun) yang memiliki kebutuhan keluarga berencana terpenuhi menurut metode kontrasepsi modern.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.7.2',  "nama_sub" => "Angka kelahiran remaja (umur 10-14 tahun : umur 15-19 tahun) per 1000 perempuan di kelompok umur yang sama.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.7.2.(a)',  "nama_sub" => "Total Fertility Rate (TFR).",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.8.1',  "nama_sub" => "Cakupan pelayanan kesehatan esensial.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.8.1.(a)',  "nama_sub" => "Unmet Need Pelayanan Kesehatan.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.8.2',  "nama_sub" => "Proporsi populasi dengan pengeluaran rumah tangga yang besar untuk kesehatan sebagai bagian dari total pengeluaran rumah tangga atau pendapatan",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.8.2.(a)',  "nama_sub" => "Cakupan Jaminan Kesehatan Nasional (JKN).",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.9.1',  "nama_sub" => "Angka kematian akibat rumah tangga dan polusi udara ambien.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.9.2',  "nama_sub" => "Angka kematian akibat air tidak aman, sanitasi tidak aman, dan tidak higienis.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.9.3',  "nama_sub" => "Angka kematian akibat keracunan.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.a.1',  "nama_sub" => "Persentase merokok pada penduduk umur ≥15 tahun.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.b.1',  "nama_sub" => "Proporsi target populasi yang telah memperoleh vaksin program nasional.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.b.2',  "nama_sub" => "Total Official Development Assistant (ODA) untuk penelitian medis dan sektor kesehatan dasar.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.b.3',  "nama_sub" => "Proporsi fasilitas kesehatan dengan paket obat esensial yang tersedia dan terjangkau secara berkelanjutan.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.c.1',  "nama_sub" => "Kepadatan dan distribusi tenaga kesehatan.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.d.1',  "nama_sub" => "Regulasi kesehatan internasional dan kesiapsiagaan darurat kesehatan.",
            ],
            [
                'indikator_id' => 3, 'kode_sub' => '3.d.2',  "nama_sub" => "Persentase infeksi aliran darah akibat organisme antimikroba- resisten terpilih/tertentu.",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.1.1',  "nama_sub" => "Proporsi anak-anak dan remaja:(a) pada kelas 4, (b) tingkat akhir SD/kelas 6, (c) tingkat akhir SMP/kelas 9 yang mencapai standar kemampuan minimum dalam: (i) membaca, (ii) matematika.",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.1.1.(a)',  "nama_sub" => "Proporsi anak-anak dan remaja di: (1) kelas 5 (b) kelas 8, dan (c) usia 15 tahun yang mencapai setidaknya tingkat kemahiran minimum dalam: (membaca, (ii) matematika.",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.1.2',  "nama_sub" => "Tingkat penyelesaian pendidikan jenjang SD/sederajat, SMP/sederajat, dan SMA/sederajat.",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.1.2.(a)',  "nama_sub" => "Angka anak tidak sekolah jenjang PAUD, SD/sederajat, SMP/sederajat, dan SMA/Sederajat.",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.2.1',  "nama_sub" => "Proporsi anak usia 24-59 bulan yang berkembang dengan baik dalam bidang kesehatan, pembelajaran, dan psikososial, menurut jenis kelamin.",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.2.2',  "nama_sub" => "Tingkat partisipasi dalam pembelajaran yang teroganisir (satu tahun sebelum usia sekolah dasar), menurut jenis kelamin",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.3.1',  "nama_sub" => "Tingkat partisipasi remaja dan dewasa dalam pendidikan dan pelatihan formal dan non formal dalam 12 bulan terakhir, menurut jenis kelamin.",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.3.1.(a)',  "nama_sub" => "Angka Partisipasi Kasar (APK) Perguruan Tinggi (PT).",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.4.1',  "nama_sub" => "Proporsi remaja dan dewasa dengan keterampilan teknologi informasi dan komunikasi (TIK).",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.4.1.(a)',  "nama_sub" => "Proporsi remaja (usia 15-24 tahun) dan dewasa (usia 15-59 tahun) dengan keterampilan teknologi informasi dan komunikasi (TIK).",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.5.1',  "nama_sub" => "Rasio Angka Partisipasi Murni (APM) pada tingkat SD/sederajat, dan (ii) Rasio Angka Partisipasi Kasar (APK) pada tingkat SMP/sederajat, SMA/SMK/sederajat, dan Perguruan Tinggi untuk (a) perempuan/laki-laki, (b) pedesaan/perkotaan, (c) kuintil terbawah/teratas, (d) disabilitas/tanpa disabilitas.",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.6.1',  "nama_sub" => "Persentase remaja/dewasa pada kelompok usia tertentu, paling tidak mahir/mampu pada level tertentu dalam keterampilan (i) membaca dan (ii) menghitung, menurut jenis kelamin",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.6.1.(a)',  "nama_sub" => "Persentase angka melek aksara penduduk umur ≥15 tahun.",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.7.1',  "nama_sub" => "Pengarusutamaan pada semua jenjang pendidikan, (i) pendidikan kewargaan dunia,(ii) pendidikan untuk pembangunan berkelanjutan termasuk kesetaraan gender dan hak asasi manusia pada (a) kebijakan pendidikan nasional, (b) kurikulum, (c) pendidikan guru, (d) penilaian siswa.",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.a.1',  "nama_sub" => "Proporsi sekolah dengan akses ke: (a) listrik (b) internet untuk tujuan pengajaran, (c) komputer untuk tujuan pengajaran, (d) air minum layak, (e) fasilitas sanitasi dasar per jenis kelamin,(f) fasilitas cuci tangan (terdiri air, sanitasi, dan higienis bagi semua (WASH).",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.a.1.(a)',  "nama_sub" => "Persentase siswa yang mengalami perundungan dalam 12 bulan terakhir.",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.b.1',  "nama_sub" => "Jumlah bantuan resmi Pemerintah Indonesia kepada mahasiswa asing penerima beasiswa kemitraan negara berkembang",
            ],
            [
                'indikator_id' => 4, 'kode_sub' => '4.c.1',  "nama_sub" => "Persentase guru yang memenuhi kualifikasi sesuai dengan standar nasional menurut jenjang pendidikan.",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.1.1',  "nama_sub" => "Ketersediaan kerangka hukum yang mendorong, menetapkan dan memantau kesetaraan gender dan penghapusan diskriminasi berdasarkan jenis kelamin.",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.2.1',  "nama_sub" => "Proporsi perempuan dewasa dan anak perempuan (umur 15- 64 tahun) mengalami kekerasan (fisik, seksual, atau emosional) oleh pasangan atau mantan pasangan dalam 12 bulan terakhir.",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.2.2',  "nama_sub" => "Proporsi perempuan dewasa dan anak perempuan (umur 15- 64 tahun) mengalami kekerasan seksual oleh orang lain selain pasangan dalam 12 bulan terakhir.",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.3.1*',  "nama_sub" => "Proporsi perempuan umur 20 - 24 tahun yang usia kawin pertama atau usia hidup bersama pertama sebelum umur 15 tahun dan sebelum umur 18 tahun.",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.3.2',  "nama_sub" => "Persentase anak perempuan dan perempuan berusia 15-49 tahun yang telah menjalani FGM/C, menurut kelompok umur",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.4.1',  "nama_sub" => "Proporsi waktu yang dihabiskan untuk pekerjaan rumah tangga dan perawatan, berdasarkan jenis kelamin, kelompok umur, dan lokasi.",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.5.1',  "nama_sub" => "Proporsi kursi yang diduduki perempuan di (a) parlemen tingkat pusat dan (b) pemerintah daerah.",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.5.2',  "nama_sub" => "Proporsi perempuan yang berada di posisi managerial.",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.6.1*',  "nama_sub" => "Proporsi perempuan usia reproduksi 15-49 tahun yang membuat keputusan sendiri terkait hubungan seksual, penggunaan kontrasepsi, dan layanan kesehatan.",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.6.2',  "nama_sub" => "Regulasi yang menjamin akses yang setara bagi perempuan dan laki-laki untuk mendapatkan pelayanan, informasi dan pendidikan terkait kesehatan seksual dan reproduksi.",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.a.1',  "nama_sub" => "1) Proporsi penduduk pertanian yang memiliki hak atas tanah pertanian; (2) Proporsi perempuan penduduk pertanian sebagai pemilik atau yang memiliki hak atas tanah pertanian, menurut jenis kepemilikan.",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.a.2',  "nama_sub" => "Ketersediaan kerangka hukum (termasuk hukum adat) yang menjamin persamaan hak perempuan untuk kepemilikan tanah dan/atau hak kontrol.",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.b.1',  "nama_sub" => "Proporsi individu yang menguasai/memiliki telepon genggam.",
            ],
            [
                'indikator_id' => 5, 'kode_sub' => '5.c.1',  "nama_sub" => "Ketersediaan sistem untuk melacak dan membuat alokasi umum untuk kesetaraan gender dan pemberdayaan perempuan.",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.1.1',  "nama_sub" => "Persentase rumah tangga yang menggunakan layanan air minum yang dikelola secara aman.",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.2.1',  "nama_sub" => "Persentase rumah tangga yang menggunakan layanan sanitasi yang dikelola secara aman, termasuk fasilitas cuci tangan dengan air dan sabun.",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.3.1',  "nama_sub" => "Proporsi limbah cair rumahtangga dan industri cair yang diolah secara aman.",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.3.1.(a)',  "nama_sub" => "Persentase limbah cair industri yang dikelola secara aman",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.3.2',  "nama_sub" => "Proporsi badan air dengan kualitas air ambien yang baik.",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.3.2.(a)',  "nama_sub" => "Kualitas air permukaan sebagai air baku.",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.3.2.(b)',  "nama_sub" => "Kualitas air tanah sebagai air baku.",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.4.1',  "nama_sub" => "Perubahan efisiensi penggunaan air dari waktu ke waktu.",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.4.2',  "nama_sub" => "Tingkat water stress: proporsi pengambilan (withdrawal) air tawar terhadap ketersediannya.",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.4.2.(a)',  "nama_sub" => "Proporsi pengambilan air baku bersumber dari air permukaan terhadap ketersediaannya.",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.4.2.(b)',  "nama_sub" => "Proporsi pengambilan air baku bersumber dari air tanah terhadap ketersediaanya.",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.5.1',  "nama_sub" => "Tingkat pelaksanaan pengelolaan sumber daya air secara terpadu (0-100).",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.5.2',  "nama_sub" => "Proporsi wilayah cekungan lintas batas dengan pengaturan kerja sama sumberdaya air yang operasional.",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.6.1',  "nama_sub" => "Perubahan tingkat sumber daya air terkait ekosistem dari waktu ke waktu",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.a.1.',  "nama_sub" => "Jumlah ODA terkait air dan sanitasi yang menjadi bagian rencana belanja pemerintah.",
            ],
            [
                'indikator_id' => 6, 'kode_sub' => '6.b.1.',  "nama_sub" => "Proporsi unit pemerintah lokal yang menerbitkan dan melaksanakan kebijakan dan prosedur terkait partisipasi masyarakat dalam pengelolaanair dan sanitasi.",
            ],
            [
                'indikator_id' => 7, 'kode_sub' => '7.1.1',  "nama_sub" => "Rasio elektrifikasi.",
            ],
            [
                'indikator_id' => 7, 'kode_sub' => '7.1.1.(a)',  "nama_sub" => "Konsumsi listrik per kapita",
            ],
            [
                'indikator_id' => 7, 'kode_sub' => '7.1.2',  "nama_sub" => "Proporsi penduduk dengan sumber energi utama pada teknologi dan bahan bakar yang bersih.",
            ],
            [
                'indikator_id' => 7, 'kode_sub' => '7.1.2.(a)',  "nama_sub" => "Jumlah sambungan jaringan gas untuk rumah tangga.",
            ],
            [
                'indikator_id' => 7, 'kode_sub' => '7.1.2.(b)',  "nama_sub" => "Rasio penggunaan gas rumah tangga.",
            ],
            [
                'indikator_id' => 7, 'kode_sub' => '7.2.1',  "nama_sub" => "Bauran energi terbarukan.",
            ],
            [
                'indikator_id' => 7, 'kode_sub' => '7.3.1',  "nama_sub" => "Intensitas energi primer.",
            ],
            [
                'indikator_id' => 7, 'kode_sub' => '7.a.1',  "nama_sub" => "Bantuan keuangan internasional ke negara-negara berkembang untuk mendukung penelitian dan pengembangan energi bersih dan produksi energi terbarukan, termasuk sistem hibrida.",
            ],
            [
                'indikator_id' => 7, 'kode_sub' => '7.b.1',  "nama_sub" => "Kapasitas Terpasang Pembangkit Listrik dari Energi Terbarukan di dalam watt per kapita).",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.1.1',  "nama_sub" => "Laju pertumbuhan PDB per kapita.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.1.1.(a)',  "nama_sub" => "PDB per kapita.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.2.1',  "nama_sub" => "Laju pertumbuhan PDB per tenaga kerja/Tingkat pertumbuhan PDB riil per orang bekerja per tahun.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.3.1',  "nama_sub" => "Proporsi lapangan kerja informal, berdasarkan sektor dan jenis kelamin",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.3.1.(a)',  "nama_sub" => "Persentase akses UMKM (Usaha Mikro, Kecil, dan Menengah) ke layanan keuangan",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.4.1',  "nama_sub" => "Jejak material (material footprint) yang dihitung selama tahun berjalan.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.4.1.(a)',  "nama_sub" => "Rencana dan implementasi Strategi Pelaksanaan Sasaran Pola Konsumsi dan produksi berkelanjutan",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.4.2',  "nama_sub" => "Konsumsi material domestik (domestic material consumption).",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.5.1',  "nama_sub" => "Upah rata-rata per jam pekerja.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.5.2',  "nama_sub" => "Tingkat pengangguran terbuka berdasarkan jenis kelamin dan kelompok umur.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.5.2.(a)',  "nama_sub" => "Persentase setengah pengangguran.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.6.1',  "nama_sub" => "Persentase usia muda (15-24) yang sedang tidak sekolah, bekerja atau mengikuti pelatihan (NEET).",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.7.1',  "nama_sub" => "Persentase dan jumlah anak usia 5-17 tahun, yang bekerja, dibedakan berdasarkan jenis kelamin dan kelompok umur (dibedakan berdasarkan bentuk-bentuk pekerjaan terburuk untuk anak).",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.7.1.(a)',  "nama_sub" => "Persentase dan jumlah anak usia 10-17 tahun, yang bekerja, dibedakan berdasarkan jenis kelamin dan kelompok umur",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.8.1',  "nama_sub" => "Tingkat frekuensi kecelakaan kerja fatal dan non-fatal, berdasarkan jenis kelamin, sektor pekerjaan dan status migran.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.8.1.(a)',  "nama_sub" => "Jumlah perusahaan yang menerapkan norma K3.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.8.2',  "nama_sub" => "Peningkatan kepatuhan atas hak-hak pekerja (kebebasan berserikat dan perundingan kolektif) berdasarkan sumber tekstual ILO dan peraturan perundang-undangan negara terkait",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.9.1',  "nama_sub" => "Proporsi dan laju pertumbuhan kontribusi pariwisata terhadap PDB.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.9.1.(a)',  "nama_sub" => "Jumlah wisatawan mancanegara.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.9.1.(b)',  "nama_sub" => "Jumlah kunjungan wisatawan nusantara.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.9.1.(c)',  "nama_sub" => "Jumlah devisa sektor pariwisata.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.10.1',  "nama_sub" => "Jumlah kantor bank dan ATM per 100.000 penduduk dewasa.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.10.1.(a)',  "nama_sub" => "Proporsi kredit UMKM terhadap total kredit.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.a.1',  "nama_sub" => "Bantuan untuk komitmen perdagangan dan pencairan pendanaan.",
            ],
            [
                'indikator_id' => 8, 'kode_sub' => '8.b.1',  "nama_sub" => "Adanya strategi nasional terkait ketenagakerjaan pemuda yang sudah dikembangkan dan operasional sebagai strategi khusus atau sebagai bagian dari strategi ketenagakerjaan nasional.",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.1.1',  "nama_sub" => "Populasi penduduk desa yang tinggal dalam jarak 2 km terhadap jalan yang layak.",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.1.1.(a)',  "nama_sub" => "Kondisi mantap jalan nasional.",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.1.1.(b)',  "nama_sub" => "Panjang pembangunan jalan tol",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.1.1.(c)',  "nama_sub" => "Panjang jalur kereta api.",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.1.2',  "nama_sub" => "Jumlah penumpang dan barang berdasarkan moda transportasi",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.1.2.(a)',  "nama_sub" => "Jumlah bandara.",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.1.2.(b)',  "nama_sub" => "Jumlah pelabuhan penyebrangan",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.1.2.(c)',  "nama_sub" => "Jumlah pelabuhan strategis.",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.2.1',  "nama_sub" => "Proporsi nilai tambah sektor industri manufaktur terhadap PDB dan per kapita.",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.2.1.(a)',  "nama_sub" => "Laju pertumbuhan PDB industri manufaktur",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.2.2',  "nama_sub" => "Proporsi tenaga kerja pada sektor industri manufaktur.",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.3.1',  "nama_sub" => "Proporsi nilai tambah industri kecil terhadap total nilai tambah industri.",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.3.2',  "nama_sub" => "Proporsi industri kecil dengan pinjaman atau kredit.",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.4.1',  "nama_sub" => "Rasio Emisi CO2/Emisi Gas Rumah Kaca dengan nilai tambah sektor industri manufaktur",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.4.1.(a)',  "nama_sub" => "Penurunan emisi gas rumah kaca sektor industry",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.4.1.(b)',  "nama_sub" => "Intensitas emisi sektor industri",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.5.1',  "nama_sub" => "Proporsi anggaran riset pemerintah terhadap PDB.",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.5.2',  "nama_sub" => "Jumlah sumber daya manusia bidang ilmu pengetahuan dan teknologi (peneliti, perekayasa, dan dosen) pada instansi pemerintah dan perguruan tinggi per satu juta penduduk",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.5.2.(a)',  "nama_sub" => "Proporsi sumberdaya manusia bidang ilmu pengetahuan dan teknologi dengan gelar Doktor (S3)",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.a.1',  "nama_sub" => "Total dukungan resmi internasional (bantuan resmi pembangunan ditambah aliran bantuan resmi biaya) untuk infrastruktur",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.b.1',  "nama_sub" => "Proporsi nilai tambah teknologi menengah dan tinggi terhadap total nilai tambah.",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.b.1.(a)',  "nama_sub" => "Kontribusi Ekspor Produk Industri berteknologi tinggi",
            ],
            [
                'indikator_id' => 9, 'kode_sub' => '9.c.1',  "nama_sub" => "Proporsi penduduk yang terlayani mobile broadband.",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.1.1',  "nama_sub" => "Rasio gini",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.1.1.(a)',  "nama_sub" => "Persentase penduduk yang hidup di bawah garis kemiskinan nasional, menurut jenis kelamin dan kelompok umur",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.1.1.(b)',  "nama_sub" => "Jumlah desa tertinggal",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.1.1.(c)',  "nama_sub" => "Jumlah Desa mandiri",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.1.1.(d)',  "nama_sub" => "Jumlah daerah tertinggal",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.1.1.(e)',  "nama_sub" => "Rata-rata pertumbuhan ekonomi di daerah tertinggal",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.1.1.(f)',  "nama_sub" => "Persentase penduduk miskin di daerah tertinggal",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.2.1',  "nama_sub" => "Proporsi penduduk yang hidup di bawah 50 persen dari median pendapatan, menurut jenis kelamin dan penyandang difabilitas.",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.3.1',  "nama_sub" => "Proporsi pendudu yang melaporkan merasa didiskriminasikan atau dilecehkan dalam kurun 12 bulan terakhir atas dasar larangan diskriminasi sesuai hukum internasional Hak Asasi Manusia",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.3.1.(a)',  "nama_sub" => "Indeks kebebasan",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.3.1.(b)',  "nama_sub" => "Jumlah penanganan pengaduan pelanggaran Hak Asasi Manusia (HAM).",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.3.1.(c)',  "nama_sub" => "Jumlah penanganan pengaduan pelanggaran Hak Asasi Manusia (HAM) perempuan terutama kekerasan terhadap perempuan",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.3.1.(d)',  "nama_sub" => "Jumlah kebijakan yang diskriminatif dalam 12 bulan lalu berdasarkan pelarangan diskriminasi menurut hukum HAM Internasional",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.4.1',  "nama_sub" => "Proporsi upah dan subsidi perlindungan sosial dari pemberi kerja terhadap PDB.",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.4.1.(a)',  "nama_sub" => "Persentase rencana anggaran untuk belanja fungsi perlindungan sosial pemerintah pusat",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.4.1.(b)',  "nama_sub" => "Proporsi peserta program Jaminan Sosial bidang ketenagakerjaan",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.4.2',  "nama_sub" => "Dampak redistributif dari kebijakan fiskal",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.5.1',  "nama_sub" => "Financial Soundness Indicator",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.5.1.(a)',  "nama_sub" => "Indikator kesehatan perbankan",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.6.1',  "nama_sub" => "Proporsi anggota dan hak suara negara-negara berkembang di organisasi Internasional",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.7.1',  "nama_sub" => "Proporsi biaya rekrutmen yang ditanggung pekerja terhadap pendapatan tahunan di negara tujuan",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.7.2',  "nama_sub" => "Jumlah negara yang mengimplementasikan kebijakan migran yang baik",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.7.2.(a)',  "nama_sub" => "Jumlah dokumen kerjasama ketenagakerjaan dan perlindungan pekerja migran antara negara RI dengan negara tujuan penempatan",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.7.2.(b)',  "nama_sub" => "Jumlah fasilitasi pelayanan penempatan TKLN berdasarkan okupasi",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.7.3',  "nama_sub" => "Jumlah orang yang meninggal atau hilang dalam proses migrasi menuju tujuan Internasional",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.7.4',  "nama_sub" => "Proporsi penduduk yang mengungsi menurut negara asal",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.a.1',  "nama_sub" => "Besaran nilai tarif yang diberlakukan untuk mengimpor dari negara kurang berkembang/berkembang dengan tarif nol persen",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.b.1',  "nama_sub" => "Total aliran sumberdaya yang masuk untuk pembangunan, terpilah berdasarkan negara-negara penerima dan donor serta jenis aliran ( misalnya bantuan pembangunan resmi, investasi asing langsung,serta aliran yang lain).",
            ],
            [
                'indikator_id' => 10, 'kode_sub' => '10.c.1',  "nama_sub" => "Proporsi biaya remitansi dari jumlah yang dikirimkan",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.1.1',  "nama_sub" => "Proporsi populasi penduduk perkotaan yang tinggal di daerah kumuh, permukiman liar atau rumah yang tidak layak",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.1.1.(a)',  "nama_sub" => "Persentase rumah tangga yang memiliki akses terhadap hunian yang layak dan terjangkau",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.2.1',  "nama_sub" => "Proporsi populasi yang mendapatkan akses yang nyaman pada transpotasi publik, terpilah menurut jenis kelamin, kelompok usia, dan penyandang disabilitas",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.2.1.(a)',  "nama_sub" => "Proporsi populasi yang mendapatkan akses yang nyaman pada transportasi publik",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.2.1.(b)',  "nama_sub" => "Persentase penduduk terlayani transportasi umum",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.3.1',  "nama_sub" => "Rasio laju peningkatan konsumsi tanah denga laju pertumbuhan penduduk",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.3.1.(a)',  "nama_sub" => "Rasio laju perluasan lahan terbangun terhadap laju pertumbuhan penduduk",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.3.2',  "nama_sub" => "Proporsi kota dengan struktur partisipasi langsung masyarakat sipil dalam perencanaan dan manajemen kota yang berlangsung secara teratur dan demokratis",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.4.1',  "nama_sub" => "Total pengeluaran per kapita yang diperuntukan untuk preservasi, perlindungan, konservasi pada semua warisan budaya dan alam (dengan Purchase Power Parity,PPP).",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.4.1.(a)',  "nama_sub" => "Total pengeluaran per kapita yang diperuntukan untuk preservasi, perlindungan, konservasi pada semua warisan budaya dan alam (non-PPP).",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.5.2',  "nama_sub" => "hilang dan terkena dampak bencana per 100.000 orang, Kerugian ekonomi langsung",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.5.2.(a)',  "nama_sub" => "akibat bencana terhadap GDP,termasuk kerusakan bencana terhadap infrastruktur yang kritis dan gangguan terhadap pelayanan dasar. Proporsi kerugian ekonomi",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.6.1',  "nama_sub" => "Langsung akibat bencana relatif terhadap PDB proporsi limbah padat",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.6.1.(a)',  "nama_sub" => "perkotaan yang dikumpulkan secara teratur dengan pemrosesan akhir yang baikn terhadap total limbah padat perkotan yang dihasilkan oleh suatu kota.",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.6.1.(b)',  "nama_sub" => "Persentase rumah tangga di perkotaan yang terlayani pengelolaan sampahnya",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.6.2',  "nama_sub" => "Persentase sampah nasional yang terkelola, Rata-rata tahun materi",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.6.2.(a)',  "nama_sub" => "partikular halus (PM 2,5 dan PM 10) di Perkotaan (dibobotkan jumlah penduduk). Rata-rata tahun materi",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.6.2.(b)',  "nama_sub" => "partikulat halus PM 10. Indeks kualitas udara",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '1.1.7.1',  "nama_sub" => "Proporsi ruang terbuka perkotaan untuk semua, menurut kelompok usia, jenis kelamin dan penyandang disabilitas.",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.7.1.(a)',  "nama_sub" => "Proporsi ruang terbuka perkotaan untuk semua",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.7.2',  "nama_sub" => "Proporsi orang yang menjadi korban kekerasan atau pelecehan seksual menurut jenis kelamin, usia, status disabilitas, dan tempat kejadian (12 bulan terakhir).",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.7.2.(a)',  "nama_sub" => "Proporsi penduduk yang mengalami kejahatan kekerasan dalam 12 bulan terakhir.",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.a.1',  "nama_sub" => "Jumlah negara yang memiliki kebijakan perkotaan nasional atau rencana pembangunan daerah yang (a) merespon dinamika penduduk; (b) memastikan keseimbangan perencanaan wilayah; dan (c) meningkatkan ruang fiskal daerah.",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.a.1.(a)',  "nama_sub" => "Proporsi penduduk yang tinggal di daerah dengan RTRW yang sudah dilengkapi KLHS.",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.b.1',  "nama_sub" => "rencana dan implementasi strategi nasional penanggulangan bencana yng selaras dengan the sendai framework for disaster risk reduction 2015-2030",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.b.2',  "nama_sub" => "Persentase pemerintah daerah yang mengadopsi dan menerapkan strategi penanggulangan bencana daerah yang selaras dengan rencana/strategi nasional penanggulangan bencana",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.c.1',  "nama_sub" => "-",
            ],
            [
                'indikator_id' => 11, 'kode_sub' => '11.c.1.(a)',  "nama_sub" => "Persentase Daerah yang memiliki Perda Bangunan Gedung yang Berkelanjutan, Berketahanan menggunakan Material Lokal.",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.1.1',  "nama_sub" => "Rencana dan implementasi Strategi Pelaksanaan Sasaran Pola Konsumsi dan Produksi Berkelanjutan",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.2.1',  "nama_sub" => "Jejak material (material footprint).",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.2.2',  "nama_sub" => "Konsumsi material domestik (domestic material consumption).",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.3.1',  "nama_sub" => "a) Indeks kehilangan makanan (Food loss index); dan (b) Indeks sampah makanan (Food waste index).",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.3.1.(a)',  "nama_sub" => "Persentase sisa makanan.",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.4.1',  "nama_sub" => "Peran aktif dalam mengikuti kesepakatan multilateral internasional tentang bahan kimia dan limbah berbahaya.",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.4.1.(a)',  "nama_sub" => "Persentase pengurangan dan penghapusan merkuri dari baseline 50 ton penggunaan merkuri",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.4.1.(b)',  "nama_sub" => "Persentase penurunan tingkat konsumsi perusak ozon dari baseline",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.4.2',  "nama_sub" => "(a) Limbah B3 yang dihasilkan per kapita; dan (b) Proporsi limbah B3 yang ditangani/diolah berdasarkan jenis penanganannya/ pengolahannya.",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.5.1',  "nama_sub" => "Tingkat daur ulang Nasional, ton bahan daur ulang",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.5.1.(a)',  "nama_sub" => "Jumlah timbulan sampah yang didaur ulang",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.6.1',  "nama_sub" => "Jumlah perusahaan yang mempublikasi laporan keberlnjutannya",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.6.1.(a)',  "nama_sub" => "Jumlah perusahaan yang menerapkan sertifikasi SNI ISO 14001.",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.7.1',  "nama_sub" => "Tingkatan (degree) kebijakan pengadaan publik dan implementasi rencana aksi",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.7.1.(a)',  "nama_sub" => "Jumlah produk ramah lingkungan yang teregister dan masuk dalam pengadaan barang dan jasa pemerintah.",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.7.1.(b)',  "nama_sub" => "Jumlah Dokumen Penerapan Label Ramah Lingkungan untuk Pengadaan Barang dan Jasa",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.8.1',  "nama_sub" => "Tingkat pengaruh keutamaan pendidikan warga negara global dan pendidikan untuk pembangunan berkelanjutan ke dalam (a) kebijakan pendidikan nasional, (b) kurikulum, (c) pendidikan guru dan (d) asesmen siswa.",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.8.1.(a)',  "nama_sub" => "Jumlah satuan Pendidikan formal dan Lembaga/komunitas masyarakat peduli dan berbudaya lingkungan hidup",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.8.1.(b)',  "nama_sub" => "jumlah fasilitas publik yang menerapkan Standar Pelayanan Masyarakat (SPM) dan teregister",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.a.1',  "nama_sub" => "Kapasitas pembangkit energi terbarukan yang terpasang (dalam watt per kapita).",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.b.1',  "nama_sub" => "Mengimplementasikan perangkat akuntansi dasar untuk memantau aspek ekonomi dan lingkungan dari pariwisata berkelanjutan",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.b.1.(a)',  "nama_sub" => "Jumlah lokasi penerapan sustainable tourism development.",
            ],
            [
                'indikator_id' => 12, 'kode_sub' => '12.c.1',  "nama_sub" => "(a) Jumlah subsidi bahan bakar fosil sebagai persentase dari PDB; dan (b) Jumlah subsidi bahan bakar fosil sebagai proporsi dari total pengeluaran nasional untuk bahan bakar fosil.",
            ],
            [
                'indikator_id' => 13, 'kode_sub' => '13.1.1',  "nama_sub" => "Jumlah korban meninggal, hilang dan terkena dampak langsung bencana per 100.000 orang.",
            ],
            [
                'indikator_id' => 13, 'kode_sub' => '13.1.2',  "nama_sub" => "Rencana dan implementasi strategi nasional penanggulangan bencana yang selaras dengan the Sendai Framework for Disaster Risk Reduction 2015–2030",
            ],
            [
                'indikator_id' => 13, 'kode_sub' => '13.1.3',  "nama_sub" => "Persentase pemerintah daerah yang mengadopsi dan menerapkan strategi penanggulangan bencana daerah yang selaras dengan rencana/strategi nasional penanggulangan bencana",
            ],
            [
                'indikator_id' => 13, 'kode_sub' => '13.2.1',  "nama_sub" => "Terwujudnya penyelenggaraan inventarisasi gas rumah kaca (GRK), serta monitoring, pelaporan dan verifikasi emisi GRK yang dilaporkan dalam dokumen Biennial Update Report (BUR) dan National Communications.",
            ],
            [
                'indikator_id' => 13, 'kode_sub' => '13.2.2',  "nama_sub" => "Jumlah emisi gas rumah kaca (GRK) per tahun",
            ],
            [
                'indikator_id' => 13, 'kode_sub' => '13.2.2.(a)',  "nama_sub" => "Potensi Penurunan emisi gas rumah kaca (GRK).",
            ],
            [
                'indikator_id' => 13, 'kode_sub' => '13.2.2.(b)',  "nama_sub" => "Potensi Penurunan intensitas emisi gas rumah kaca (GRK).",
            ],
            [
                'indikator_id' => 13, 'kode_sub' => '13.3.1',  "nama_sub" => "Tingkat pengarusutamaan pendidikan warga negara global dan pendidikan untuk pembangunan berkelanjutan ke dalam (a) kebijakan pendidikan nasional, (b) kurikulum, (c) pendidikan guru dan (d) asesmen siswa.",
            ],
            [
                'indikator_id' => 13, 'kode_sub' => '13.3.1.(a)',  "nama_sub" => "Jumlah satuan Pendidikan formal dan Lembaga/komunitas masyarakat peduli dan berbudaya lingkungan hidup.",
            ],
            [
                'indikator_id' => 13, 'kode_sub' => '13.a.1',  "nama_sub" => "Jumlah dana yang disediakan dan mobilisasinya dalam USD per tahun terkait dengan keberlanjutan mobilisasi dana untuk mencapai komitmen 100 milyar USD hingga tahun 2025",
            ],
            [
                'indikator_id' => 13, 'kode_sub' => '13.a.1.(a)',  "nama_sub" => "Jumlah dana publik (budget tagging) untuk pendanaan perubahan iklim.",
            ],
            [
                'indikator_id' => 13, 'kode_sub' => '13.b.1',  "nama_sub" => "Jumlah negara-negara kurang berkembang dan negara berkembang kepulauan kecil dengan nationally determined contributions, strategi jangka panjang, rencana nasional adaptasi, dan strategi yang dilaporkan dalam adaptation communications dan national communications.",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.1.1',  "nama_sub" => "(a) Indeks eutrofikasi pesisir dan (b) kepadatan sampah plastik terapung.",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.1.1.(a)',  "nama_sub" => "Presentase penurunan sampah terbuang ke laut.",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.2.1',  "nama_sub" => "Penerapan pendekatan berbasis ekosistem dalam pengelolaan areal lautan",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.2.1.(a)',  "nama_sub" => "Terkelolanya 11 Wilayah Pengelolaan Perikanan Negara Republik Indonesia (WPPNRI) secara berkelanjutan.",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.3.1',  "nama_sub" => "Rata-rata keasaman laut (pH) yang diukur pada jaringan stasiun sampling yang disetujui dan memadai",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.4.1',  "nama_sub" => "Proporsi tangkapan jenis ikan laut yang berada dalam batasan biologis yang aman",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.5.1',  "nama_sub" => "Jumlah luas kawasan konservasi perairan laut",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.6.1',  "nama_sub" => "Tingkat pelaksanaan dari instrument internasional yang bertujkuan untuk memerangi penangkapan ikan yang illegal, tidak dilaporkan dan tidak diatur (IUU fishing).",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.6.1.(a)',  "nama_sub" => "Persentase kepatuhan pelaku usaha",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.7.1',  "nama_sub" => "Perikanan berkelanjutan sebagai presentase dari Produk Domestik Bruto (PDB).",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.a.1',  "nama_sub" => "Proporsi dari total pengeluaran untuk penelitian yang dialokasikan untuk penelitian di bidang teknologi kelautan",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.b.1',  "nama_sub" => "Tingkat penerapan kerangka hukum/regulasi/kebijakan/kelem bagaan yang mengakui dan melindungi hak akses untuk perikanan skala kecil",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.b.1.(a)',  "nama_sub" => "Jumlah provinsi dengan peningkatan akses pendanaan usaha nelayan",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.b.1.(b)',  "nama_sub" => "Jumlah nelayan yang terlindungi",
            ],
            [
                'indikator_id' => 14, 'kode_sub' => '14.c.1',  "nama_sub" => "Tersedianya kerangka kebijakan dan instrumen terkait pelaksanaan UNCLOS (the United Nations Convention on the Law of the Sea).",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.1.1',  "nama_sub" => "Proporsi kawasan hutan terhadap total luas lahan",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.1.2',  "nama_sub" => "Proporsi situs penting keanekaragaman hayati daratan dan perairan darat dalam kawasan konservasi, bekerdasarkan ekosistemnya.",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.1.2.(a)',  "nama_sub" => "Luas Kawasan bernilai Konservasi Tinggi (HCV).",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.2.1',  "nama_sub" => "Kemajuan menuju pengelolaan hutan lestari",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.2.1.(a)',  "nama_sub" => "Jumlah KPH yang masuk Kategori maju",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.3.1',  "nama_sub" => "Proporsi lahan yang terdegradasi terhadap luas lahan keseluruhan",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.4.1',  "nama_sub" => "Situs penting keanekaragaman hayati pegunungan dalam kawasan konservasi",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.4.2',  "nama_sub" => "Indeks tutupan hijau pegunungan",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.5.1',  "nama_sub" => "Indeks Daftar merah (Red-list index).",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.6.1',  "nama_sub" => "Kerangka kerja legislatif, administratif dan kebijakan untuk memastikan pembagian manfaat yang adil dan merata",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.7.1',  "nama_sub" => "Proporsi satwa liar dari hasil perburuan atau perdagangan ilegal",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.7.1.(a)',  "nama_sub" => "jumlah kasus perburuan atau perdagangan ilegal TSL",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.8.1',  "nama_sub" => "Kerangka legislasi nasional yang relevan dan memadai dalam pencegahan atau pengendalian jenis asing invasive (JAI).",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.9.1',  "nama_sub" => "(a) Rencana pemanfaatan Keanekaragaman Hayati Aichi 2 dari Rencana Strategis; dan (b) integrasi keanekaragaman hayati ke dalam sistem akuntansi dan pelaporan nasional atau Sistem Akuntansi lingkungan-ekonomi",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.9.1.(a)',  "nama_sub" => "Rencana pemanfaatan keanekaragaman hayati Aichi 2 dari rencana strategis",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.a.1',  "nama_sub" => "(a) Bantuan pembangunan resmi untuk konservasi dan pemanfaatan keanekaragaman hayati secara berkelanjutan dan (b) pendapatan yang dihasilkan dan pembiayaan dimobilisasi dari instrumen ekonomi terkait keanekaragaman hayati.",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.a.1',  "nama_sub" => "Bantuan pembangunan resmi untuk konservasi dan pemanfaatan keanekaragaman hayati secara berkelanjutan",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.b.1',  "nama_sub" => "(a) Bantuan pembangunan resmi untuk konservasi dan pemanfaatan keanekaragaman hayati secara berkelanjutan dan (b) pendapatan yang dihasilkan dan pembiayaan dimobilisasi dari instrumen ekonomi terkait keanekaragaman keanekaragaman",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.b.1.(a)',  "nama_sub" => "Bantuan pembangunan resmi untuk konservasi dan pemanfaatan keanekaragaman hayati secara berkelanjutan",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.c.1',  "nama_sub" => "Proporsi hidupan liar dari hasil perburuan atau perdagangan gelap",
            ],
            [
                'indikator_id' => 15, 'kode_sub' => '15.c.1.(a)',  "nama_sub" => "Jumlah kasus perburuan atau perdagangan ilegal TSL",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.1.1',  "nama_sub" => "Angka korban kejahatan pembunuhan per 100.000 penduduk berdasarkan umur dan jenis kelamin",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.1.1.(a)',  "nama_sub" => "Jumlah kasus kejahatan pembunuhan pada satu tahun terakhir",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.1.2',  "nama_sub" => "Kematian disebabkan konflik per 100.000 penduduk terpilah berdasarkan jenis kelamin, umur dan penyebab kematian",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.1.2.(a)',  "nama_sub" => "Kematian disebabkan konflik per 100.000 penduduk",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.1.3',  "nama_sub" => "Proporsi penduduk yang mengalami (a) kekerasan secara fisik, (b) kekerasan psikologi atau (c) kekerasan seksual dalam 12 bulan terakhir",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.1.3.(a)',  "nama_sub" => "Proporsi penduduk yang menjadi korban kejahatan kekerasan dalam 12 bulan terakhir",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.1.4',  "nama_sub" => "Proporsi penduduk yang merasa aman berjalan sendirian di area tempat tinggalnya",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.2.1',  "nama_sub" => "Proporsi anak umur 1-17 tahun yang mengalami hukuman fisik dan/atau agresi psikologis dari pengasuh dalam sebulan terakhir",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.2.1.(a)',  "nama_sub" => "Proporsi rumah tangga yang memiliki anak umur 1-17 tahun yang mengalami hukuman fisik dan/atau agresi psikologis dari pengasuh dalam setahun terakhir",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.2.1.(b)',  "nama_sub" => "Prevalensi anak usia 13-17 tahun yang pernah mengalami kekerasan sepanjang hidupnya",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.2.2',  "nama_sub" => "Angka korban perdagangan manusia per 100.000 penduduk menurut jenis kelamin, kelompok umur dan jenis eksploitasi",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.2.3',  "nama_sub" => "Proporsi perempuan dan laki- laki muda umur 18-29 tahun yang mengalami kekerasan seksual sebelum umur 18 tahun.",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.2.3.(a)',  "nama_sub" => "Proporsi perempuan dan laki- laki muda umur 18-24 tahun yang mengalami kekerasan seksual sebelum umur 18 tahun",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.3.1',  "nama_sub" => "Proporsi korban kekerasan dalam 12 bulan lalu yang melaporkan kepada pihak berwajib atau pihak berwenang yang diakui dalam mekanisme resolusi konfik",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.3.1.(a)',  "nama_sub" => "Proporsi korban kekerasan dalam 12 bulan terakhir yang melaporkan kepada polisi",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.3.1.(b)',  "nama_sub" => "Persentase orang miskin yang menerima bantuan hukum secara litigasi dan nonlitigasi",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.3.1.(c)',  "nama_sub" => "Persentase orang tidak mampu yang menerima layanan hukum berupa pos bantuan hukum, sidang di luar gedung pengadilan, dan pembebasan",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.3.2',  "nama_sub" => "Proporsi tahanan terhadap seluruh tahanan dan narapidana",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.3.2. (a)',  "nama_sub" => "Proporsi tahanan yang melebihi masa penahanan terhadap seluruh jumlah tahanan",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.3.3',  "nama_sub" => "Proporsi penduduk yang mengalami perselisihan dalam 2 tahun terakhir dan mengakses mekanisme penyelesaian perselisihan secara formal maupun informal, berdasarkan jenis mekanisme penyelesaian",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.3.3 (a)',  "nama_sub" => "Indeks Akses terhadap Keadilan (Access to justice index)",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.4.1',  "nama_sub" => "Total nilai aliran dana gelap masuk dan keluar negeri ( dalam US$).",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.4.2',  "nama_sub" => "Proporsi senjata yang disita, baik yang ditemukan maupun yang diserahkan, yang asal senjata serta konteksnya telah dilacak atau diresmikan oleh otoritas yang berkompeten yang sejalan dengan instrumen internasional",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.5.1',  "nama_sub" => "Proporsi penduduk yang memiliki paling tidak satu kontak hubungan dengan petugas, yang membayar suap kepada petugas atau diminta untuk menyuap petugas tersebut dalam 12 bulan terakhir",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.5.1.(a)',  "nama_sub" => "Indeks Perilaku Anti korupsi (IPAK).",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.5.2',  "nama_sub" => "Proporsi pelaku usaha yang paling tidak memiliki kontak dengan petugas pemerintah dan yang membayar suap kepada seorang petugas, atau diminta untuk membayar suap oleh petugas-petugas, selama 12 bulan terakhir.",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.6.1',  "nama_sub" => "Proporsi pengeluaran utama pemerintah terhadap anggaran yang disetujui",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.6.1.(a)',  "nama_sub" => "Persentase opini instansi pemerintah yang mendapat opini WTP",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.6.1.(b)',  "nama_sub" => "Persentase instansi pemerintah dengan sakip ≥ B",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.6.1.(c)',  "nama_sub" => "Persentase instansi pemerintah dengan Indeks RB ≥ B",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.6.2',  "nama_sub" => "Proporsi penduduk yang puas terhadap pengalaman terakhir atas layanan publik.",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.6.2.(a)',  "nama_sub" => "Jumlah Instansi pemerintah dengan tingkat kepatuhan pelayanan publik kategori baik.",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.7.1',  "nama_sub" => "Proporsi jabatan di lembaga nasional dan daerah, meliputi (a) lembaga legislatif; (b) lembaga pelayanan publik; (c) lembaga peradilan, dibanding distribusi nasional, menurut jenis kelamin, kelompok umur, orang dengan disabilitas dan kelompok masyarakat",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.7.1.(a)',  "nama_sub" => "Persentase keterwakilan perempuan di Dewan Perwakilan Rakyat (DPR) danDewan Perwakilan Rakyat Daerah (DPRD).",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.7.1.(b)',  "nama_sub" => "Persentase keterwakilan perempuan sebagai pengambilan keputusan di lembaga eksekutif (Eselon I dan II).",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.7.2',  "nama_sub" => "Proporsi penduduk yang percaya pada pengambilan keputusan yang inklusif dan responsif menurut jenis kelamin, umur, difabilitas dan kelompok masyarakat",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.7.2.(a)',  "nama_sub" => "Indeks Kapasitas lembaga demokrasi",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.7.2.(b)',  "nama_sub" => "Indeks Aspek kebebasan",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.7.2.(c)',  "nama_sub" => "Indeks kesetaraan",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.8.1',  "nama_sub" => "Proporsi keanggotaan dan hak pengambilan keputusan dari negara-negara berkembang di Organisasi internasional",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.8.1.(a.)',  "nama_sub" => "Jumlah keanggotaan dan kontribusi dalam forum dan organisasi internasional",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.9.1',  "nama_sub" => "Proporsi anak umur di bawah 5 tahun yang kelahirannya dicatat oleh lembaga pencatatan sipil menurut umur",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.9.1.(a)',  "nama_sub" => "Persentase kepemilikan akta lahir untuk penduduk 0-17 tahun pada 40% berpendapatan bawah",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.9.1.(b)',  "nama_sub" => "Persentase cakupan kepemilikan akta kelahiran pada penduduk 0-17 tahun",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.9.1.(b)',  "nama_sub" => "Jumlah kasus terverifikasi atas pembunuhan, penculikan dan penghilangan secara paksa, penahanan sewenang-wenang dan penyiksaan terhadap jurnalis, awak media, serikat pekerja, dan pembela HAM dalam 12 bulan terakhir",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.10.1.(a)',  "nama_sub" => "Indikator Kebebasan dari kekerasan bagi jurnalis dan awak media",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.10.1.(b)',  "nama_sub" => "Jumlah penanganan pengaduan pelanggaran Hak Asasi Manusia (HAM).",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.10.1.(c)',  "nama_sub" => "Jumlah penanganan pengaduan pelanggaran Hak Asasi Manusia (HAM) perempuan terutama kekerasan terhadap perempuan",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.10.2',  "nama_sub" => "Jumlah negara yang mengadopsi dan melaksanakan konstitusi, statutori dan/atau jaminan kebijakan untuk akses publik pada informasi",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.10.2.(a)',  "nama_sub" => "Jumlah Badan Publik yang berkualifikasi informatif",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.10.2.(b)',  "nama_sub" => "Jumlah penyelesaian sengketa informasi publik melalui mediasi dan/atau ajudikasi non litigasi",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.a.1',  "nama_sub" => "Tersedianya lembaga hak asasi manusia (HAM) nasional yang independen yang sejalan dengan Paris principles",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.b.1',  "nama_sub" => "Proporsi penduduk yang melaporkan mengalami diskriminasi dan pelecehan dalam 12 bulan lalu berdasarkan pada pelarangan diskriminasi menurut hukum HAM Internasional",
            ],
            [
                'indikator_id' => 16, 'kode_sub' => '16.b.1.(a)',  "nama_sub" => "Jumlah kebijakan yang diskriminatif dalam 12 bulan lalu berdasarkan pelarangan diskriminasi menurut hukum HAM Internasional.",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.1.1',  "nama_sub" => "Total pendapatan pemerintah sebagai proporsi terhadap PDB menurut sumber",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.1.1.(a)',  "nama_sub" => "Rasio penerimaan pajak terhadap PDB",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.1.2',  "nama_sub" => "Proporsi anggaran domestik yang didanai oleh pajak domestik",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.2.1',  "nama_sub" => "Bantuan Pembangunan bersih, secara keseluruhan dan kepada negara-negara kurang berkembang, sebagai proporsi terhadap Pendapatan Nasional Bruto dari OECD/komite Bantuan pembangunan.",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.2.1.(a)',  "nama_sub" => "Proporsi ODA terhadap PDB dan PNB",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.3.1',  "nama_sub" => "Investasi Asing langsung (Foreign Direct Investment/FDI), bantuan pembangunan dan Kerjasama selatan sebagai proporsi dari pendapatan nasional bruto.",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.3.2',  "nama_sub" => "Volume pengiriman uang/remitansi (dalam US dollars) sebagai proporsi terhadap total PDB",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.3.2.(a)',  "nama_sub" => "Proporsi volume remitansi TKI (dalam US dollars) terhadap PDB",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.4.1',  "nama_sub" => "Proporsi pembayaran utang dan bunga (Debt Service) ekspor barang dan jasa",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.5.1',  "nama_sub" => "Jumlah negara yang mengadopsi dan melaksanakan rezim promosi investasi untuk negara- negara berkembang termasuk negara-negara kurang berkembang",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.6.1',  "nama_sub" => "Langganan broadband internet tetap per 100 penduduk menurut tingkat kecepatannya",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.6.1.(a)',  "nama_sub" => "Persentase pelanggan terlayani jaringan internet akses tetap pitalebar (fixed broadband) terhadap total rumah tangga",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.6.1.(b)',  "nama_sub" => "Persentase kecamatan yang Terjangkau infrastruktur jaringan serat optik (Kumulatif)",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.7.1',  "nama_sub" => "Total jumlah dana untuk negara - negara berkembang untuk mempromosikan pengembangan, transfer, mendiseminasikan dan menyebarkan teknologi yang ramah lingkungan.",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.8.1',  "nama_sub" => "Persentase pengguna internet",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.9.1',  "nama_sub" => "Nilai dolar atas bantuan teknis dan pembiayaan ( termasuk melalui kerjasama utara-selatan,Selatan-Selatan dan Tirangular) yang dikomitmenkan untuk negara-negara berkembang",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.9.1.(a)',  "nama_sub" => "Jumlah pendanaan kegiatan kerja sama pembangunan internasional termasuk KSST",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.9.1.(b)',  "nama_sub" => "Jumlah program/kegiatan kerja Sama Selatan-Selatan dan Tringular",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.10.1',  "nama_sub" => "Rata-rata tarif terbobot dunia Free Trade Agreement (FTA)",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.10.1(a)',  "nama_sub" => "Jumlah PTA/FTA/CEPA yang disepakati",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.11.1',  "nama_sub" => "Bagian negara berkembang dan kurang berkembang pada ekspor global",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.11.1.(a)',  "nama_sub" => "Pertumbuhan ekspor produk non migas",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.12.1',  "nama_sub" => "Rata-rata tarif terbobot yang dihadapi oleh negara-negara berkembang, negara kurang berkembang dan negara berkembang pulau kecil",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.13.1',  "nama_sub" => "Tersedianya Dashboard makroekonomi",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.14.1',  "nama_sub" => "Jumlah negara yang telah memiliki mekanisme untuk keterpaduan kebijakan pembangunan berkelanjutan",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.15.1',  "nama_sub" => "Jangkauan penggunaan kerangka kerja dan alat perencanaan yang dimiliki negara oleh penyedia kerjasama pembangunan",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.16.1',  "nama_sub" => "Jumlah negara yang melaporkan perkembangan kerangka kerja monitoring efektivitas pembangunan multi-stakeholder yang mendukung pencapaian tujuan pembangunan berkelanjutan",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.17.1',  "nama_sub" => "Jumlah komitmen untuk kemitraan publik-swasta untuk infrastruktur (dalam US dollars).",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.17.1.(a)',  "nama_sub" => "Jumlah Dokumen daftar Rencana Proyek KPBU (DRK) yang diterbitkan setiap tahun",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.17.1.(b)',  "nama_sub" => "Jumlah proyek yang ditawarkan untuk dilaksanakan dengan skema Kerjasama Pemerintah dan Badan Usaha (KPBU).",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.17.1.(c)',  "nama_sub" => "jumlah nilai investasi proyek KPBU berdasarkan tahap perencanaan, penyiapan dan transaksi",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.18.1',  "nama_sub" => "Indikator-indikator statistik untuk pemantauan SDGs",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.18.1.(a)',  "nama_sub" => "Persentase pengguna data yang menggunakan data BPS sebagai dasar perencanaan, monitoring dan evaluasi pembangunan nasional",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.18.1.(b)',  "nama_sub" => "Persentase publikasi statistik yang menerapkan standar akurasi sebagai dasar perencanaan, monitoring dan evaluasi pembangunan nasional",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.18.2',  "nama_sub" => "Jumlah negara yang memiliki undang-undang statistik nasional yang tunduk pada Prinsip-prinsip fundamental Statistik resmi",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.18.3',  "nama_sub" => "Jumlah negara dengan Perencanaan Statistik nasional yang didanai dan melaksanakan rencananya berdasarkan sumber pendanaan",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.19.1',  "nama_sub" => "Nilai dolar atas semua sumber yang tersedia untuk penguatan kapasitas statistik di negara-negara berkembang",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.19.1.(a)',  "nama_sub" => "Persentase K/L/D/I yang melaksanakan rekomendasi kegiatan statistik",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.19.1.(b)',  "nama_sub" => "Persentase K/L/D/I yang menyampaikan metadata sektoral dan khusus sesuai standar",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.19.2',  "nama_sub" => "Proporsi negara yang a) melaksanakan paling tidak satu Sensus Penduduk dan Perumahan dalam sepuluh tahun terakhir, dan b) mencapai 100 persen pencatatan kelahiran dan 80 persen pencatatan kematian",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.19.2 (a)',  "nama_sub" => "Terlaksananya sensus Penduduk dan Perumahan pada tahun 2020",
            ],
            [
                'indikator_id' => 17, 'kode_sub' => '17.19.2.(b)',  "nama_sub" => "Tersedianya data registrasi terkait kelahiran dan kematian (Vital Statistics Register).",
            ]
        ];
        SubIndikator::query()->insert($subindikator);
    }
}
