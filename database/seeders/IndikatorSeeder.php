<?php

namespace Database\Seeders;

use App\Models\Indikator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndikatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $indikator = [
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.1.1',  "nama_indikator" => "Tingkat kemiskinan ekstrim", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.2.1',  "nama_indikator" => "Persentase penduduk yang hidup di bawah garis kemiskinan nasional, menurut jenis kelamin dan kelompok umur.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.2.2',  "nama_indikator" => "Persentase laki-laki, perempuan dan anak-anak dari semua usia, yang hidup dalam kemiskinan dalam berbagai dimensi, sesuai dengan definisi nasional.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.3.1',  "nama_indikator" => "Proporsi penduduk yang menerima program perlindungan sosial, menurut jenis kelamin, untuk kategori kelompok semua anak, pengangguran, lansia, penyandang difabilitas, ibu hamil/melahirkan, korban kecelakaan kerja, kelompok miskin dan rentan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.3.1.(a)',  "nama_indikator" => "Proporsi peserta jaminan kesehatan melalui SJSN Bidang Kesehatan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.3.1.(b)',  "nama_indikator" => "Proporsi peserta Program Jaminan Sosial Bidang Ketenagakerjaan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.4.1',  "nama_indikator" => "Proporsi penduduk/rumah tangga dengan akses terhadap pelayanan dasar.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.4.2',  "nama_indikator" => "Proporsi dari penduduk dewasa yang mendapatkan hak atas tanah yang didasari oleh dokumen hukum dan yang memiliki hak atas tanah berdasarkan jenis kelamin dan tipe kepemilikan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.5.1',  "nama_indikator" => "Jumlah korban meninggal, hilang, dan terkena dampak bencana per 100.000 orang.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.5.2',  "nama_indikator" => "Jumlah kerugian ekonomi langsung akibat bencana terhadap GDP.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.5.3',  "nama_indikator" => "Rencana dan implementasi strategi nasional pengurangan risiko bencana yang selaras dengan the Sendai Framework for Disaster Risk Reduction 2015–2030", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.5.4',  "nama_indikator" => "Proporsi pemerintah daerah yang mengadopsi dan menerapkan strategi daerah pengurangan risiko bencana yang selaras dengan strategi nasional pengurangan risiko bencana", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.a.1',  "nama_indikator" => "Proporsi sumber daya yang dialokasikan oleh pemerintah secara langsung untuk program pemberantasan kemiskinan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.a.2',  "nama_indikator" => "Pengeluaran untuk layanan pokok (pendidikan, kesehatan dan perlindungan sosial) sebagai persentase dari total belanja pemerintah.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 1, 'kode_indikator' => '1.b.1',  "nama_indikator" => "Proporsi pengeluaran rutin dan pembangunan pada sektor- sektor yang memberi manfaat pada kelompok perempuan, kelompok miskin dan rentan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.1.1',  "nama_indikator" => "Prevalensi Ketidakcukupan Konsumsi Pangan (Prevalence of Undernourishment).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.1.2',  "nama_indikator" => "Prevalensi penduduk dengan kerawanan pangan sedang atau berat, berdasarkan pada Skala Pengalaman kerawanan pangan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.2.1',  "nama_indikator" => "Prevalensi stunting (pendek dan sangat pendek) pada anak dibawah lima tahun/balita.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.2.2',  "nama_indikator" => "Prevalensi wasting (berat badan/tinggi badan) anak pada usia kurang dari 5 tahun, berdasarkan tipe.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.2.2.(a)',  "nama_indikator" => "Kualitas konsumsi pangan yang diindikasikan oleh skor Pola Pangan Harapan (PPH).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.2.3',  "nama_indikator" => "Prevalensi anemia pada ibu hamil usia 15-49 tahun.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.3.1',  "nama_indikator" => "Volume produksi per tenaga kerja menurut kelas usaha tani tanaman/ peternakan/ perikanan/ kehutanan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.3.1.(a)',  "nama_indikator" => "Nilai tambah pertanian per tenaga kerja menurut kelas usaha tani tanaman/ peternakan/ perikanan/ kehutanaan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.3.2',  "nama_indikator" => "Rata-rata pendapatan produsen pertanian skala kecil menurut subsektor", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.4.1',  "nama_indikator" => "areal pertanian produktif dan berkelanjutan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.4.1.(a)',  "nama_indikator" => "Proporsi luas lahan pertanian yang ditetapkan sebagai kawasan pertanian pangan berkelanjutan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.5.1',  "nama_indikator" => "Jumlah sumber daya genetik tanaman dan hewan untuk pangan dan pertanian yang disimpan di fasilitas konservasi, baik jangka menengah ataupun jangka panjang.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.5.2',  "nama_indikator" => "Proporsi ras ternak lokal yang berisiko punah.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.a.1',  "nama_indikator" => "Indeks orientasi pertanian (IOP) untuk pengeluaran pemerintah.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.a.2',  "nama_indikator" => "Total bantuan pembangunan (ODA) dan bantuan lain untuk sektor pertanian.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.b.1',  "nama_indikator" => "Subsidi ekspor pertanian.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 2, 'kode_indikator' => '2.c.1',  "nama_indikator" => "Indikator anomali harga pangan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.1.1',  "nama_indikator" => "Angka Kematian Ibu (AKI).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.1.2',  "nama_indikator" => "Proporsi perempuan pernah kawin umur 15-49 tahun yang proses melahirkan terakhirnya (a) ditolong oleh tenaga kesehatan terlatih; (b) di fasilitas kesehatan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.2.1',  "nama_indikator" => "(a) Angka Kematian Balita (AKBa); (b) Angka Kematian Bayi (AKB) per 1000 kelahiran hidup", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.2.2',  "nama_indikator" => "Angka Kematian Neonatal (AKN) per 1000 kelahiran hidup.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.3.1',  "nama_indikator" => "Jumlah infeksi baru HIV per 1000 penduduk tidak terinfeksi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.3.2',  "nama_indikator" => "Insiden Tuberkulosis (ITB) per 100.000 penduduk", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.3.3',  "nama_indikator" => "Kejadian Malaria per 1000 orang.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.3.3.(a)',  "nama_indikator" => "Jumlah kabupaten/kota yang mencapai eliminasi malaria.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.3.4',  "nama_indikator" => "Insiden Hepatitis B per 100.000 penduduk.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.3.5',  "nama_indikator" => "Jumlah orang yang memerlukan intervensi terhadap penyakit tropis yang terabaikan (a) Filariasis dan (b) Kusta", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.3.5.(a)',  "nama_indikator" => "Jumlah kabupaten/kota dengan eliminasi kusta.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.3.5.(b)',  "nama_indikator" => "Jumlah kabupaten/kota endemis filariasis yang mencapai eliminasi.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.4.1',  "nama_indikator" => "Kematian akibat penyakit kardiovaskuler, kanker, diabetes atau penyakit pernapasan kronis.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.4.1.(a)',  "nama_indikator" => "Persentase merokok penduduk usia 10-18 tahun.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.4.1.(b)',  "nama_indikator" => "Prevalensi tekanan darah tinggi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.4.1.(c)',  "nama_indikator" => "Prevalensi obesitas pada penduduk umur ≥18 tahun.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.4.2',  "nama_indikator" => "Angka kematian (insidens rate) akibat bunuh diri.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.5.1',  "nama_indikator" => "Cakupan intervensi pengobatan (farmakologi, psikososial, rehabilitasi dan layanan pasca intervensi) bagi gangguan penyalahgunaan zat.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.5.1.(a)',  "nama_indikator" => "Jumlah penyalahguna napza yang mendapatkan pelayanan rehabilitasi medis.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.5.1.(b)',  "nama_indikator" => "Jumlah yang mengakses layanan pasca rehabilitasi.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.5.2',  "nama_indikator" => "Konsumsi alkohol (liter per kapita) oleh penduduk umur ≥15 tahun dalam satu tahun terakhir", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.6.1',  "nama_indikator" => "Angka kematian akibat cedera fatal kecelakaan lalu lintas.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.7.1',  "nama_indikator" => "Proporsi perempuan usia reproduksi (15-49 tahun) yang memiliki kebutuhan keluarga berencana terpenuhi menurut metode kontrasepsi modern.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.7.2',  "nama_indikator" => "Angka kelahiran remaja (umur 10-14 tahun : umur 15-19 tahun) per 1000 perempuan di kelompok umur yang sama.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.7.2.(a)',  "nama_indikator" => "Total Fertility Rate (TFR).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.8.1',  "nama_indikator" => "Cakupan pelayanan kesehatan esensial.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.8.1.(a)',  "nama_indikator" => "Unmet Need Pelayanan Kesehatan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.8.2',  "nama_indikator" => "Proporsi populasi dengan pengeluaran rumah tangga yang besar untuk kesehatan sebagai bagian dari total pengeluaran rumah tangga atau pendapatan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.8.2.(a)',  "nama_indikator" => "Cakupan Jaminan Kesehatan Nasional (JKN).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.9.1',  "nama_indikator" => "Angka kematian akibat rumah tangga dan polusi udara ambien.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.9.2',  "nama_indikator" => "Angka kematian akibat air tidak aman, sanitasi tidak aman, dan tidak higienis.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.9.3',  "nama_indikator" => "Angka kematian akibat keracunan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.a.1',  "nama_indikator" => "Persentase merokok pada penduduk umur ≥15 tahun.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.b.1',  "nama_indikator" => "Proporsi target populasi yang telah memperoleh vaksin program nasional.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.b.2',  "nama_indikator" => "Total Official Development Assistant (ODA) untuk penelitian medis dan sektor kesehatan dasar.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.b.3',  "nama_indikator" => "Proporsi fasilitas kesehatan dengan paket obat esensial yang tersedia dan terjangkau secara berkelanjutan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.c.1',  "nama_indikator" => "Kepadatan dan distribusi tenaga kesehatan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.d.1',  "nama_indikator" => "Regulasi kesehatan internasional dan kesiapsiagaan darurat kesehatan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 3, 'kode_indikator' => '3.d.2',  "nama_indikator" => "Persentase infeksi aliran darah akibat organisme antimikroba- resisten terpilih/tertentu.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.1.1',  "nama_indikator" => "Proporsi anak-anak dan remaja:(a) pada kelas 4, (b) tingkat akhir SD/kelas 6, (c) tingkat akhir SMP/kelas 9 yang mencapai standar kemampuan minimum dalam: (i) membaca, (ii) matematika.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.1.1.(a)',  "nama_indikator" => "Proporsi anak-anak dan remaja di: (1) kelas 5 (b) kelas 8, dan (c) usia 15 tahun yang mencapai setidaknya tingkat kemahiran minimum dalam: (membaca, (ii) matematika.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.1.2',  "nama_indikator" => "Tingkat penyelesaian pendidikan jenjang SD/sederajat, SMP/sederajat, dan SMA/sederajat.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.1.2.(a)',  "nama_indikator" => "Angka anak tidak sekolah jenjang PAUD, SD/sederajat, SMP/sederajat, dan SMA/Sederajat.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.2.1',  "nama_indikator" => "Proporsi anak usia 24-59 bulan yang berkembang dengan baik dalam bidang kesehatan, pembelajaran, dan psikososial, menurut jenis kelamin.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.2.2',  "nama_indikator" => "Tingkat partisipasi dalam pembelajaran yang teroganisir (satu tahun sebelum usia sekolah dasar), menurut jenis kelamin", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.3.1',  "nama_indikator" => "Tingkat partisipasi remaja dan dewasa dalam pendidikan dan pelatihan formal dan non formal dalam 12 bulan terakhir, menurut jenis kelamin.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.3.1.(a)',  "nama_indikator" => "Angka Partisipasi Kasar (APK) Perguruan Tinggi (PT).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.4.1',  "nama_indikator" => "Proporsi remaja dan dewasa dengan keterampilan teknologi informasi dan komunikasi (TIK).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.4.1.(a)',  "nama_indikator" => "Proporsi remaja (usia 15-24 tahun) dan dewasa (usia 15-59 tahun) dengan keterampilan teknologi informasi dan komunikasi (TIK).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.5.1',  "nama_indikator" => "Rasio Angka Partisipasi Murni (APM) pada tingkat SD/sederajat, dan (ii) Rasio Angka Partisipasi Kasar (APK) pada tingkat SMP/sederajat, SMA/SMK/sederajat, dan Perguruan Tinggi untuk (a) perempuan/laki-laki, (b) pedesaan/perkotaan, (c) kuintil terbawah/teratas, (d) disabilitas/tanpa disabilitas.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.6.1',  "nama_indikator" => "Persentase remaja/dewasa pada kelompok usia tertentu, paling tidak mahir/mampu pada level tertentu dalam keterampilan (i) membaca dan (ii) menghitung, menurut jenis kelamin", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.6.1.(a)',  "nama_indikator" => "Persentase angka melek aksara penduduk umur ≥15 tahun.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.7.1',  "nama_indikator" => "Pengarusutamaan pada semua jenjang pendidikan, (i) pendidikan kewargaan dunia,(ii) pendidikan untuk pembangunan berkelanjutan termasuk kesetaraan gender dan hak asasi manusia pada (a) kebijakan pendidikan nasional, (b) kurikulum, (c) pendidikan guru, (d) penilaian siswa.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.a.1',  "nama_indikator" => "Proporsi sekolah dengan akses ke: (a) listrik (b) internet untuk tujuan pengajaran, (c) komputer untuk tujuan pengajaran, (d) air minum layak, (e) fasilitas sanitasi dasar per jenis kelamin,(f) fasilitas cuci tangan (terdiri air, sanitasi, dan higienis bagi semua (WASH).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.a.1.(a)',  "nama_indikator" => "Persentase siswa yang mengalami perundungan dalam 12 bulan terakhir.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.b.1',  "nama_indikator" => "Jumlah bantuan resmi Pemerintah Indonesia kepada mahasiswa asing penerima beasiswa kemitraan negara berkembang", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 4, 'kode_indikator' => '4.c.1',  "nama_indikator" => "Persentase guru yang memenuhi kualifikasi sesuai dengan standar nasional menurut jenjang pendidikan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.1.1',  "nama_indikator" => "Ketersediaan kerangka hukum yang mendorong, menetapkan dan memantau kesetaraan gender dan penghapusan diskriminasi berdasarkan jenis kelamin.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.2.1',  "nama_indikator" => "Proporsi perempuan dewasa dan anak perempuan (umur 15- 64 tahun) mengalami kekerasan (fisik, seksual, atau emosional) oleh pasangan atau mantan pasangan dalam 12 bulan terakhir.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.2.2',  "nama_indikator" => "Proporsi perempuan dewasa dan anak perempuan (umur 15- 64 tahun) mengalami kekerasan seksual oleh orang lain selain pasangan dalam 12 bulan terakhir.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.3.1*',  "nama_indikator" => "Proporsi perempuan umur 20 - 24 tahun yang usia kawin pertama atau usia hidup bersama pertama sebelum umur 15 tahun dan sebelum umur 18 tahun.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.3.2',  "nama_indikator" => "Persentase anak perempuan dan perempuan berusia 15-49 tahun yang telah menjalani FGM/C, menurut kelompok umur", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.4.1',  "nama_indikator" => "Proporsi waktu yang dihabiskan untuk pekerjaan rumah tangga dan perawatan, berdasarkan jenis kelamin, kelompok umur, dan lokasi.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.5.1',  "nama_indikator" => "Proporsi kursi yang diduduki perempuan di (a) parlemen tingkat pusat dan (b) pemerintah daerah.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.5.2',  "nama_indikator" => "Proporsi perempuan yang berada di posisi managerial.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.6.1*',  "nama_indikator" => "Proporsi perempuan usia reproduksi 15-49 tahun yang membuat keputusan sendiri terkait hubungan seksual, penggunaan kontrasepsi, dan layanan kesehatan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.6.2',  "nama_indikator" => "Regulasi yang menjamin akses yang setara bagi perempuan dan laki-laki untuk mendapatkan pelayanan, informasi dan pendidikan terkait kesehatan seksual dan reproduksi.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.a.1',  "nama_indikator" => "1) Proporsi penduduk pertanian yang memiliki hak atas tanah pertanian; (2) Proporsi perempuan penduduk pertanian sebagai pemilik atau yang memiliki hak atas tanah pertanian, menurut jenis kepemilikan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.a.2',  "nama_indikator" => "Ketersediaan kerangka hukum (termasuk hukum adat) yang menjamin persamaan hak perempuan untuk kepemilikan tanah dan/atau hak kontrol.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.b.1',  "nama_indikator" => "Proporsi individu yang menguasai/memiliki telepon genggam.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 5, 'kode_indikator' => '5.c.1',  "nama_indikator" => "Ketersediaan sistem untuk melacak dan membuat alokasi umum untuk kesetaraan gender dan pemberdayaan perempuan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.1.1',  "nama_indikator" => "Persentase rumah tangga yang menggunakan layanan air minum yang dikelola secara aman.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.2.1',  "nama_indikator" => "Persentase rumah tangga yang menggunakan layanan sanitasi yang dikelola secara aman, termasuk fasilitas cuci tangan dengan air dan sabun.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.3.1',  "nama_indikator" => "Proporsi limbah cair rumahtangga dan industri cair yang diolah secara aman.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.3.1.(a)',  "nama_indikator" => "Persentase limbah cair industri yang dikelola secara aman", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.3.2',  "nama_indikator" => "Proporsi badan air dengan kualitas air ambien yang baik.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.3.2.(a)',  "nama_indikator" => "Kualitas air permukaan sebagai air baku.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.3.2.(b)',  "nama_indikator" => "Kualitas air tanah sebagai air baku.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.4.1',  "nama_indikator" => "Perubahan efisiensi penggunaan air dari waktu ke waktu.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.4.2',  "nama_indikator" => "Tingkat water stress: proporsi pengambilan (withdrawal) air tawar terhadap ketersediannya.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.4.2.(a)',  "nama_indikator" => "Proporsi pengambilan air baku bersumber dari air permukaan terhadap ketersediaannya.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.4.2.(b)',  "nama_indikator" => "Proporsi pengambilan air baku bersumber dari air tanah terhadap ketersediaanya.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.5.1',  "nama_indikator" => "Tingkat pelaksanaan pengelolaan sumber daya air secara terpadu (0-100).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.5.2',  "nama_indikator" => "Proporsi wilayah cekungan lintas batas dengan pengaturan kerja sama sumberdaya air yang operasional.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.6.1',  "nama_indikator" => "Perubahan tingkat sumber daya air terkait ekosistem dari waktu ke waktu", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.a.1.',  "nama_indikator" => "Jumlah ODA terkait air dan sanitasi yang menjadi bagian rencana belanja pemerintah.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 6, 'kode_indikator' => '6.b.1.',  "nama_indikator" => "Proporsi unit pemerintah lokal yang menerbitkan dan melaksanakan kebijakan dan prosedur terkait partisipasi masyarakat dalam pengelolaanair dan sanitasi.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 7, 'kode_indikator' => '7.1.1',  "nama_indikator" => "Rasio elektrifikasi.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 7, 'kode_indikator' => '7.1.1.(a)',  "nama_indikator" => "Konsumsi listrik per kapita", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 7, 'kode_indikator' => '7.1.2',  "nama_indikator" => "Proporsi penduduk dengan sumber energi utama pada teknologi dan bahan bakar yang bersih.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 7, 'kode_indikator' => '7.1.2.(a)',  "nama_indikator" => "Jumlah sambungan jaringan gas untuk rumah tangga.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 7, 'kode_indikator' => '7.1.2.(b)',  "nama_indikator" => "Rasio penggunaan gas rumah tangga.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 7, 'kode_indikator' => '7.2.1',  "nama_indikator" => "Bauran energi terbarukan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 7, 'kode_indikator' => '7.3.1',  "nama_indikator" => "Intensitas energi primer.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 7, 'kode_indikator' => '7.a.1',  "nama_indikator" => "Bantuan keuangan internasional ke negara-negara berkembang untuk mendukung penelitian dan pengembangan energi bersih dan produksi energi terbarukan, termasuk sistem hibrida.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 7, 'kode_indikator' => '7.b.1',  "nama_indikator" => "Kapasitas Terpasang Pembangkit Listrik dari Energi Terbarukan di dalam watt per kapita).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.1.1',  "nama_indikator" => "Laju pertumbuhan PDB per kapita.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.1.1.(a)',  "nama_indikator" => "PDB per kapita.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.2.1',  "nama_indikator" => "Laju pertumbuhan PDB per tenaga kerja/Tingkat pertumbuhan PDB riil per orang bekerja per tahun.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.3.1',  "nama_indikator" => "Proporsi lapangan kerja informal, berdasarkan sektor dan jenis kelamin", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.3.1.(a)',  "nama_indikator" => "Persentase akses UMKM (Usaha Mikro, Kecil, dan Menengah) ke layanan keuangan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.4.1',  "nama_indikator" => "Jejak material (material footprint) yang dihitung selama tahun berjalan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.4.1.(a)',  "nama_indikator" => "Rencana dan implementasi Strategi Pelaksanaan Sasaran Pola Konsumsi dan produksi berkelanjutan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.4.2',  "nama_indikator" => "Konsumsi material domestik (domestic material consumption).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.5.1',  "nama_indikator" => "Upah rata-rata per jam pekerja.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.5.2',  "nama_indikator" => "Tingkat pengangguran terbuka berdasarkan jenis kelamin dan kelompok umur.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.5.2.(a)',  "nama_indikator" => "Persentase setengah pengangguran.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.6.1',  "nama_indikator" => "Persentase usia muda (15-24) yang sedang tidak sekolah, bekerja atau mengikuti pelatihan (NEET).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.7.1',  "nama_indikator" => "Persentase dan jumlah anak usia 5-17 tahun, yang bekerja, dibedakan berdasarkan jenis kelamin dan kelompok umur (dibedakan berdasarkan bentuk-bentuk pekerjaan terburuk untuk anak).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.7.1.(a)',  "nama_indikator" => "Persentase dan jumlah anak usia 10-17 tahun, yang bekerja, dibedakan berdasarkan jenis kelamin dan kelompok umur", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.8.1',  "nama_indikator" => "Tingkat frekuensi kecelakaan kerja fatal dan non-fatal, berdasarkan jenis kelamin, sektor pekerjaan dan status migran.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.8.1.(a)',  "nama_indikator" => "Jumlah perusahaan yang menerapkan norma K3.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.8.2',  "nama_indikator" => "Peningkatan kepatuhan atas hak-hak pekerja (kebebasan berserikat dan perundingan kolektif) berdasarkan sumber tekstual ILO dan peraturan perundang-undangan negara terkait", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.9.1',  "nama_indikator" => "Proporsi dan laju pertumbuhan kontribusi pariwisata terhadap PDB.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.9.1.(a)',  "nama_indikator" => "Jumlah wisatawan mancanegara.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.9.1.(b)',  "nama_indikator" => "Jumlah kunjungan wisatawan nusantara.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.9.1.(c)',  "nama_indikator" => "Jumlah devisa sektor pariwisata.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.10.1',  "nama_indikator" => "Jumlah kantor bank dan ATM per 100.000 penduduk dewasa.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.10.1.(a)',  "nama_indikator" => "Proporsi kredit UMKM terhadap total kredit.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.a.1',  "nama_indikator" => "Bantuan untuk komitmen perdagangan dan pencairan pendanaan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 8, 'kode_indikator' => '8.b.1',  "nama_indikator" => "Adanya strategi nasional terkait ketenagakerjaan pemuda yang sudah dikembangkan dan operasional sebagai strategi khusus atau sebagai bagian dari strategi ketenagakerjaan nasional.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.1.1',  "nama_indikator" => "Populasi penduduk desa yang tinggal dalam jarak 2 km terhadap jalan yang layak.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.1.1.(a)',  "nama_indikator" => "Kondisi mantap jalan nasional.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.1.1.(b)',  "nama_indikator" => "Panjang pembangunan jalan tol", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.1.1.(c)',  "nama_indikator" => "Panjang jalur kereta api.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.1.2',  "nama_indikator" => "Jumlah penumpang dan barang berdasarkan moda transportasi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.1.2.(a)',  "nama_indikator" => "Jumlah bandara.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.1.2.(b)',  "nama_indikator" => "Jumlah pelabuhan penyebrangan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.1.2.(c)',  "nama_indikator" => "Jumlah pelabuhan strategis.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.2.1',  "nama_indikator" => "Proporsi nilai tambah sektor industri manufaktur terhadap PDB dan per kapita.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.2.1.(a)',  "nama_indikator" => "Laju pertumbuhan PDB industri manufaktur", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.2.2',  "nama_indikator" => "Proporsi tenaga kerja pada sektor industri manufaktur.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.3.1',  "nama_indikator" => "Proporsi nilai tambah industri kecil terhadap total nilai tambah industri.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.3.2',  "nama_indikator" => "Proporsi industri kecil dengan pinjaman atau kredit.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.4.1',  "nama_indikator" => "Rasio Emisi CO2/Emisi Gas Rumah Kaca dengan nilai tambah sektor industri manufaktur", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.4.1.(a)',  "nama_indikator" => "Penurunan emisi gas rumah kaca sektor industry", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.4.1.(b)',  "nama_indikator" => "Intensitas emisi sektor industri", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.5.1',  "nama_indikator" => "Proporsi anggaran riset pemerintah terhadap PDB.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.5.2',  "nama_indikator" => "Jumlah sumber daya manusia bidang ilmu pengetahuan dan teknologi (peneliti, perekayasa, dan dosen) pada instansi pemerintah dan perguruan tinggi per satu juta penduduk", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.5.2.(a)',  "nama_indikator" => "Proporsi sumberdaya manusia bidang ilmu pengetahuan dan teknologi dengan gelar Doktor (S3)", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.a.1',  "nama_indikator" => "Total dukungan resmi internasional (bantuan resmi pembangunan ditambah aliran bantuan resmi biaya) untuk infrastruktur", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.b.1',  "nama_indikator" => "Proporsi nilai tambah teknologi menengah dan tinggi terhadap total nilai tambah.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.b.1.(a)',  "nama_indikator" => "Kontribusi Ekspor Produk Industri berteknologi tinggi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 9, 'kode_indikator' => '9.c.1',  "nama_indikator" => "Proporsi penduduk yang terlayani mobile broadband.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.1.1',  "nama_indikator" => "Rasio gini", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.1.1.(a)',  "nama_indikator" => "Persentase penduduk yang hidup di bawah garis kemiskinan nasional, menurut jenis kelamin dan kelompok umur", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.1.1.(b)',  "nama_indikator" => "Jumlah desa tertinggal", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.1.1.(c)',  "nama_indikator" => "Jumlah Desa mandiri", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.1.1.(d)',  "nama_indikator" => "Jumlah daerah tertinggal", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.1.1.(e)',  "nama_indikator" => "Rata-rata pertumbuhan ekonomi di daerah tertinggal", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.1.1.(f)',  "nama_indikator" => "Persentase penduduk miskin di daerah tertinggal", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.2.1',  "nama_indikator" => "Proporsi penduduk yang hidup di bawah 50 persen dari median pendapatan, menurut jenis kelamin dan penyandang difabilitas.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.3.1',  "nama_indikator" => "Proporsi pendudu yang melaporkan merasa didiskriminasikan atau dilecehkan dalam kurun 12 bulan terakhir atas dasar larangan diskriminasi sesuai hukum internasional Hak Asasi Manusia", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.3.1.(a)',  "nama_indikator" => "Indeks kebebasan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.3.1.(b)',  "nama_indikator" => "Jumlah penanganan pengaduan pelanggaran Hak Asasi Manusia (HAM).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.3.1.(c)',  "nama_indikator" => "Jumlah penanganan pengaduan pelanggaran Hak Asasi Manusia (HAM) perempuan terutama kekerasan terhadap perempuan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.3.1.(d)',  "nama_indikator" => "Jumlah kebijakan yang diskriminatif dalam 12 bulan lalu berdasarkan pelarangan diskriminasi menurut hukum HAM Internasional", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.4.1',  "nama_indikator" => "Proporsi upah dan subsidi perlindungan sosial dari pemberi kerja terhadap PDB.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.4.1.(a)',  "nama_indikator" => "Persentase rencana anggaran untuk belanja fungsi perlindungan sosial pemerintah pusat", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.4.1.(b)',  "nama_indikator" => "Proporsi peserta program Jaminan Sosial bidang ketenagakerjaan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.4.2',  "nama_indikator" => "Dampak redistributif dari kebijakan fiskal", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.5.1',  "nama_indikator" => "Financial Soundness Indicator", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.5.1.(a)',  "nama_indikator" => "Indikator kesehatan perbankan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.6.1',  "nama_indikator" => "Proporsi anggota dan hak suara negara-negara berkembang di organisasi Internasional", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.7.1',  "nama_indikator" => "Proporsi biaya rekrutmen yang ditanggung pekerja terhadap pendapatan tahunan di negara tujuan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.7.2',  "nama_indikator" => "Jumlah negara yang mengimplementasikan kebijakan migran yang baik", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.7.2.(a)',  "nama_indikator" => "Jumlah dokumen kerjasama ketenagakerjaan dan perlindungan pekerja migran antara negara RI dengan negara tujuan penempatan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.7.2.(b)',  "nama_indikator" => "Jumlah fasilitasi pelayanan penempatan TKLN berdasarkan okupasi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.7.3',  "nama_indikator" => "Jumlah orang yang meninggal atau hilang dalam proses migrasi menuju tujuan Internasional", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.7.4',  "nama_indikator" => "Proporsi penduduk yang mengungsi menurut negara asal", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.a.1',  "nama_indikator" => "Besaran nilai tarif yang diberlakukan untuk mengimpor dari negara kurang berkembang/berkembang dengan tarif nol persen", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.b.1',  "nama_indikator" => "Total aliran sumberdaya yang masuk untuk pembangunan, terpilah berdasarkan negara-negara penerima dan donor serta jenis aliran ( misalnya bantuan pembangunan resmi, investasi asing langsung,serta aliran yang lain).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 10, 'kode_indikator' => '10.c.1',  "nama_indikator" => "Proporsi biaya remitansi dari jumlah yang dikirimkan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.1.1',  "nama_indikator" => "Proporsi populasi penduduk perkotaan yang tinggal di daerah kumuh, permukiman liar atau rumah yang tidak layak", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.1.1.(a)',  "nama_indikator" => "Persentase rumah tangga yang memiliki akses terhadap hunian yang layak dan terjangkau", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.2.1',  "nama_indikator" => "Proporsi populasi yang mendapatkan akses yang nyaman pada transpotasi publik, terpilah menurut jenis kelamin, kelompok usia, dan penyandang disabilitas", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.2.1.(a)',  "nama_indikator" => "Proporsi populasi yang mendapatkan akses yang nyaman pada transportasi publik", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.2.1.(b)',  "nama_indikator" => "Persentase penduduk terlayani transportasi umum", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.3.1',  "nama_indikator" => "Rasio laju peningkatan konsumsi tanah denga laju pertumbuhan penduduk", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.3.1.(a)',  "nama_indikator" => "Rasio laju perluasan lahan terbangun terhadap laju pertumbuhan penduduk", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.3.2',  "nama_indikator" => "Proporsi kota dengan struktur partisipasi langsung masyarakat sipil dalam perencanaan dan manajemen kota yang berlangsung secara teratur dan demokratis", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.4.1',  "nama_indikator" => "Total pengeluaran per kapita yang diperuntukan untuk preservasi, perlindungan, konservasi pada semua warisan budaya dan alam (dengan Purchase Power Parity,PPP).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.4.1.(a)',  "nama_indikator" => "Total pengeluaran per kapita yang diperuntukan untuk preservasi, perlindungan, konservasi pada semua warisan budaya dan alam (non-PPP).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.5.2',  "nama_indikator" => "hilang dan terkena dampak bencana per 100.000 orang, Kerugian ekonomi langsung", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.5.2.(a)',  "nama_indikator" => "akibat bencana terhadap GDP,termasuk kerusakan bencana terhadap infrastruktur yang kritis dan gangguan terhadap pelayanan dasar. Proporsi kerugian ekonomi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.6.1',  "nama_indikator" => "Langsung akibat bencana relatif terhadap PDB proporsi limbah padat", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.6.1.(a)',  "nama_indikator" => "perkotaan yang dikumpulkan secara teratur dengan pemrosesan akhir yang baikn terhadap total limbah padat perkotan yang dihasilkan oleh suatu kota.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.6.1.(b)',  "nama_indikator" => "Persentase rumah tangga di perkotaan yang terlayani pengelolaan sampahnya", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.6.2',  "nama_indikator" => "Persentase sampah nasional yang terkelola, Rata-rata tahun materi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.6.2.(a)',  "nama_indikator" => "partikular halus (PM 2,5 dan PM 10) di Perkotaan (dibobotkan jumlah penduduk). Rata-rata tahun materi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.6.2.(b)',  "nama_indikator" => "partikulat halus PM 10. Indeks kualitas udara", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '1.1.7.1',  "nama_indikator" => "Proporsi ruang terbuka perkotaan untuk semua, menurut kelompok usia, jenis kelamin dan penyandang disabilitas.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.7.1.(a)',  "nama_indikator" => "Proporsi ruang terbuka perkotaan untuk semua", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.7.2',  "nama_indikator" => "Proporsi orang yang menjadi korban kekerasan atau pelecehan seksual menurut jenis kelamin, usia, status disabilitas, dan tempat kejadian (12 bulan terakhir).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.7.2.(a)',  "nama_indikator" => "Proporsi penduduk yang mengalami kejahatan kekerasan dalam 12 bulan terakhir.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.a.1',  "nama_indikator" => "Jumlah negara yang memiliki kebijakan perkotaan nasional atau rencana pembangunan daerah yang (a) merespon dinamika penduduk; (b) memastikan keseimbangan perencanaan wilayah; dan (c) meningkatkan ruang fiskal daerah.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.a.1.(a)',  "nama_indikator" => "Proporsi penduduk yang tinggal di daerah dengan RTRW yang sudah dilengkapi KLHS.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.b.1',  "nama_indikator" => "rencana dan implementasi strategi nasional penanggulangan bencana yng selaras dengan the sendai framework for disaster risk reduction 2015-2030", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.b.2',  "nama_indikator" => "Persentase pemerintah daerah yang mengadopsi dan menerapkan strategi penanggulangan bencana daerah yang selaras dengan rencana/strategi nasional penanggulangan bencana", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.c.1',  "nama_indikator" => "-", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 11, 'kode_indikator' => '11.c.1.(a)',  "nama_indikator" => "Persentase Daerah yang memiliki Perda Bangunan Gedung yang Berkelanjutan, Berketahanan menggunakan Material Lokal.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.1.1',  "nama_indikator" => "Rencana dan implementasi Strategi Pelaksanaan Sasaran Pola Konsumsi dan Produksi Berkelanjutan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.2.1',  "nama_indikator" => "Jejak material (material footprint).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.2.2',  "nama_indikator" => "Konsumsi material domestik (domestic material consumption).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.3.1',  "nama_indikator" => "a) Indeks kehilangan makanan (Food loss index); dan (b) Indeks sampah makanan (Food waste index).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.3.1.(a)',  "nama_indikator" => "Persentase sisa makanan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.4.1',  "nama_indikator" => "Peran aktif dalam mengikuti kesepakatan multilateral internasional tentang bahan kimia dan limbah berbahaya.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.4.1.(a)',  "nama_indikator" => "Persentase pengurangan dan penghapusan merkuri dari baseline 50 ton penggunaan merkuri", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.4.1.(b)',  "nama_indikator" => "Persentase penurunan tingkat konsumsi perusak ozon dari baseline", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.4.2',  "nama_indikator" => "(a) Limbah B3 yang dihasilkan per kapita; dan (b) Proporsi limbah B3 yang ditangani/diolah berdasarkan jenis penanganannya/ pengolahannya.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.5.1',  "nama_indikator" => "Tingkat daur ulang Nasional, ton bahan daur ulang", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.5.1.(a)',  "nama_indikator" => "Jumlah timbulan sampah yang didaur ulang", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.6.1',  "nama_indikator" => "Jumlah perusahaan yang mempublikasi laporan keberlnjutannya", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.6.1.(a)',  "nama_indikator" => "Jumlah perusahaan yang menerapkan sertifikasi SNI ISO 14001.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.7.1',  "nama_indikator" => "Tingkatan (degree) kebijakan pengadaan publik dan implementasi rencana aksi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.7.1.(a)',  "nama_indikator" => "Jumlah produk ramah lingkungan yang teregister dan masuk dalam pengadaan barang dan jasa pemerintah.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.7.1.(b)',  "nama_indikator" => "Jumlah Dokumen Penerapan Label Ramah Lingkungan untuk Pengadaan Barang dan Jasa", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.8.1',  "nama_indikator" => "Tingkat pengaruh keutamaan pendidikan warga negara global dan pendidikan untuk pembangunan berkelanjutan ke dalam (a) kebijakan pendidikan nasional, (b) kurikulum, (c) pendidikan guru dan (d) asesmen siswa.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.8.1.(a)',  "nama_indikator" => "Jumlah satuan Pendidikan formal dan Lembaga/komunitas masyarakat peduli dan berbudaya lingkungan hidup", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.8.1.(b)',  "nama_indikator" => "jumlah fasilitas publik yang menerapkan Standar Pelayanan Masyarakat (SPM) dan teregister", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.a.1',  "nama_indikator" => "Kapasitas pembangkit energi terbarukan yang terpasang (dalam watt per kapita).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.b.1',  "nama_indikator" => "Mengimplementasikan perangkat akuntansi dasar untuk memantau aspek ekonomi dan lingkungan dari pariwisata berkelanjutan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.b.1.(a)',  "nama_indikator" => "Jumlah lokasi penerapan sustainable tourism development.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 12, 'kode_indikator' => '12.c.1',  "nama_indikator" => "(a) Jumlah subsidi bahan bakar fosil sebagai persentase dari PDB; dan (b) Jumlah subsidi bahan bakar fosil sebagai proporsi dari total pengeluaran nasional untuk bahan bakar fosil.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 13, 'kode_indikator' => '13.1.1',  "nama_indikator" => "Jumlah korban meninggal, hilang dan terkena dampak langsung bencana per 100.000 orang.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 13, 'kode_indikator' => '13.1.2',  "nama_indikator" => "Rencana dan implementasi strategi nasional penanggulangan bencana yang selaras dengan the Sendai Framework for Disaster Risk Reduction 2015–2030", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 13, 'kode_indikator' => '13.1.3',  "nama_indikator" => "Persentase pemerintah daerah yang mengadopsi dan menerapkan strategi penanggulangan bencana daerah yang selaras dengan rencana/strategi nasional penanggulangan bencana", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 13, 'kode_indikator' => '13.2.1',  "nama_indikator" => "Terwujudnya penyelenggaraan inventarisasi gas rumah kaca (GRK), serta monitoring, pelaporan dan verifikasi emisi GRK yang dilaporkan dalam dokumen Biennial Update Report (BUR) dan National Communications.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 13, 'kode_indikator' => '13.2.2',  "nama_indikator" => "Jumlah emisi gas rumah kaca (GRK) per tahun", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 13, 'kode_indikator' => '13.2.2.(a)',  "nama_indikator" => "Potensi Penurunan emisi gas rumah kaca (GRK).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 13, 'kode_indikator' => '13.2.2.(b)',  "nama_indikator" => "Potensi Penurunan intensitas emisi gas rumah kaca (GRK).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 13, 'kode_indikator' => '13.3.1',  "nama_indikator" => "Tingkat pengarusutamaan pendidikan warga negara global dan pendidikan untuk pembangunan berkelanjutan ke dalam (a) kebijakan pendidikan nasional, (b) kurikulum, (c) pendidikan guru dan (d) asesmen siswa.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 13, 'kode_indikator' => '13.3.1.(a)',  "nama_indikator" => "Jumlah satuan Pendidikan formal dan Lembaga/komunitas masyarakat peduli dan berbudaya lingkungan hidup.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 13, 'kode_indikator' => '13.a.1',  "nama_indikator" => "Jumlah dana yang disediakan dan mobilisasinya dalam USD per tahun terkait dengan keberlanjutan mobilisasi dana untuk mencapai komitmen 100 milyar USD hingga tahun 2025", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 13, 'kode_indikator' => '13.a.1.(a)',  "nama_indikator" => "Jumlah dana publik (budget tagging) untuk pendanaan perubahan iklim.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 13, 'kode_indikator' => '13.b.1',  "nama_indikator" => "Jumlah negara-negara kurang berkembang dan negara berkembang kepulauan kecil dengan nationally determined contributions, strategi jangka panjang, rencana nasional adaptasi, dan strategi yang dilaporkan dalam adaptation communications dan national communications.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.1.1',  "nama_indikator" => "(a) Indeks eutrofikasi pesisir dan (b) kepadatan sampah plastik terapung.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.1.1.(a)',  "nama_indikator" => "Presentase penurunan sampah terbuang ke laut.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.2.1',  "nama_indikator" => "Penerapan pendekatan berbasis ekosistem dalam pengelolaan areal lautan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.2.1.(a)',  "nama_indikator" => "Terkelolanya 11 Wilayah Pengelolaan Perikanan Negara Republik Indonesia (WPPNRI) secara berkelanjutan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.3.1',  "nama_indikator" => "Rata-rata keasaman laut (pH) yang diukur pada jaringan stasiun sampling yang disetujui dan memadai", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.4.1',  "nama_indikator" => "Proporsi tangkapan jenis ikan laut yang berada dalam batasan biologis yang aman", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.5.1',  "nama_indikator" => "Jumlah luas kawasan konservasi perairan laut", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.6.1',  "nama_indikator" => "Tingkat pelaksanaan dari instrument internasional yang bertujkuan untuk memerangi penangkapan ikan yang illegal, tidak dilaporkan dan tidak diatur (IUU fishing).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.6.1.(a)',  "nama_indikator" => "Persentase kepatuhan pelaku usaha", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.7.1',  "nama_indikator" => "Perikanan berkelanjutan sebagai presentase dari Produk Domestik Bruto (PDB).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.a.1',  "nama_indikator" => "Proporsi dari total pengeluaran untuk penelitian yang dialokasikan untuk penelitian di bidang teknologi kelautan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.b.1',  "nama_indikator" => "Tingkat penerapan kerangka hukum/regulasi/kebijakan/kelem bagaan yang mengakui dan melindungi hak akses untuk perikanan skala kecil", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.b.1.(a)',  "nama_indikator" => "Jumlah provinsi dengan peningkatan akses pendanaan usaha nelayan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.b.1.(b)',  "nama_indikator" => "Jumlah nelayan yang terlindungi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 14, 'kode_indikator' => '14.c.1',  "nama_indikator" => "Tersedianya kerangka kebijakan dan instrumen terkait pelaksanaan UNCLOS (the United Nations Convention on the Law of the Sea).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.1.1',  "nama_indikator" => "Proporsi kawasan hutan terhadap total luas lahan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.1.2',  "nama_indikator" => "Proporsi situs penting keanekaragaman hayati daratan dan perairan darat dalam kawasan konservasi, bekerdasarkan ekosistemnya.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.1.2.(a)',  "nama_indikator" => "Luas Kawasan bernilai Konservasi Tinggi (HCV).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.2.1',  "nama_indikator" => "Kemajuan menuju pengelolaan hutan lestari", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.2.1.(a)',  "nama_indikator" => "Jumlah KPH yang masuk Kategori maju", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.3.1',  "nama_indikator" => "Proporsi lahan yang terdegradasi terhadap luas lahan keseluruhan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.4.1',  "nama_indikator" => "Situs penting keanekaragaman hayati pegunungan dalam kawasan konservasi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.4.2',  "nama_indikator" => "Indeks tutupan hijau pegunungan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.5.1',  "nama_indikator" => "Indeks Daftar merah (Red-list index).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.6.1',  "nama_indikator" => "Kerangka kerja legislatif, administratif dan kebijakan untuk memastikan pembagian manfaat yang adil dan merata", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.7.1',  "nama_indikator" => "Proporsi satwa liar dari hasil perburuan atau perdagangan ilegal", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.7.1.(a)',  "nama_indikator" => "jumlah kasus perburuan atau perdagangan ilegal TSL", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.8.1',  "nama_indikator" => "Kerangka legislasi nasional yang relevan dan memadai dalam pencegahan atau pengendalian jenis asing invasive (JAI).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.9.1',  "nama_indikator" => "(a) Rencana pemanfaatan Keanekaragaman Hayati Aichi 2 dari Rencana Strategis; dan (b) integrasi keanekaragaman hayati ke dalam sistem akuntansi dan pelaporan nasional atau Sistem Akuntansi lingkungan-ekonomi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.9.1.(a)',  "nama_indikator" => "Rencana pemanfaatan keanekaragaman hayati Aichi 2 dari rencana strategis", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.a.1',  "nama_indikator" => "(a) Bantuan pembangunan resmi untuk konservasi dan pemanfaatan keanekaragaman hayati secara berkelanjutan dan (b) pendapatan yang dihasilkan dan pembiayaan dimobilisasi dari instrumen ekonomi terkait keanekaragaman hayati.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.a.1',  "nama_indikator" => "Bantuan pembangunan resmi untuk konservasi dan pemanfaatan keanekaragaman hayati secara berkelanjutan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.b.1',  "nama_indikator" => "(a) Bantuan pembangunan resmi untuk konservasi dan pemanfaatan keanekaragaman hayati secara berkelanjutan dan (b) pendapatan yang dihasilkan dan pembiayaan dimobilisasi dari instrumen ekonomi terkait keanekaragaman keanekaragaman", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.b.1.(a)',  "nama_indikator" => "Bantuan pembangunan resmi untuk konservasi dan pemanfaatan keanekaragaman hayati secara berkelanjutan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.c.1',  "nama_indikator" => "Proporsi hidupan liar dari hasil perburuan atau perdagangan gelap", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 15, 'kode_indikator' => '15.c.1.(a)',  "nama_indikator" => "Jumlah kasus perburuan atau perdagangan ilegal TSL", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.1.1',  "nama_indikator" => "Angka korban kejahatan pembunuhan per 100.000 penduduk berdasarkan umur dan jenis kelamin", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.1.1.(a)',  "nama_indikator" => "Jumlah kasus kejahatan pembunuhan pada satu tahun terakhir", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.1.2',  "nama_indikator" => "Kematian disebabkan konflik per 100.000 penduduk terpilah berdasarkan jenis kelamin, umur dan penyebab kematian", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.1.2.(a)',  "nama_indikator" => "Kematian disebabkan konflik per 100.000 penduduk", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.1.3',  "nama_indikator" => "Proporsi penduduk yang mengalami (a) kekerasan secara fisik, (b) kekerasan psikologi atau (c) kekerasan seksual dalam 12 bulan terakhir", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.1.3.(a)',  "nama_indikator" => "Proporsi penduduk yang menjadi korban kejahatan kekerasan dalam 12 bulan terakhir", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.1.4',  "nama_indikator" => "Proporsi penduduk yang merasa aman berjalan sendirian di area tempat tinggalnya", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.2.1',  "nama_indikator" => "Proporsi anak umur 1-17 tahun yang mengalami hukuman fisik dan/atau agresi psikologis dari pengasuh dalam sebulan terakhir", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.2.1.(a)',  "nama_indikator" => "Proporsi rumah tangga yang memiliki anak umur 1-17 tahun yang mengalami hukuman fisik dan/atau agresi psikologis dari pengasuh dalam setahun terakhir", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.2.1.(b)',  "nama_indikator" => "Prevalensi anak usia 13-17 tahun yang pernah mengalami kekerasan sepanjang hidupnya", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.2.2',  "nama_indikator" => "Angka korban perdagangan manusia per 100.000 penduduk menurut jenis kelamin, kelompok umur dan jenis eksploitasi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.2.3',  "nama_indikator" => "Proporsi perempuan dan laki- laki muda umur 18-29 tahun yang mengalami kekerasan seksual sebelum umur 18 tahun.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.2.3.(a)',  "nama_indikator" => "Proporsi perempuan dan laki- laki muda umur 18-24 tahun yang mengalami kekerasan seksual sebelum umur 18 tahun", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.3.1',  "nama_indikator" => "Proporsi korban kekerasan dalam 12 bulan lalu yang melaporkan kepada pihak berwajib atau pihak berwenang yang diakui dalam mekanisme resolusi konfik", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.3.1.(a)',  "nama_indikator" => "Proporsi korban kekerasan dalam 12 bulan terakhir yang melaporkan kepada polisi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.3.1.(b)',  "nama_indikator" => "Persentase orang miskin yang menerima bantuan hukum secara litigasi dan nonlitigasi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.3.1.(c)',  "nama_indikator" => "Persentase orang tidak mampu yang menerima layanan hukum berupa pos bantuan hukum, sidang di luar gedung pengadilan, dan pembebasan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.3.2',  "nama_indikator" => "Proporsi tahanan terhadap seluruh tahanan dan narapidana", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.3.2. (a)',  "nama_indikator" => "Proporsi tahanan yang melebihi masa penahanan terhadap seluruh jumlah tahanan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.3.3',  "nama_indikator" => "Proporsi penduduk yang mengalami perselisihan dalam 2 tahun terakhir dan mengakses mekanisme penyelesaian perselisihan secara formal maupun informal, berdasarkan jenis mekanisme penyelesaian", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.3.3 (a)',  "nama_indikator" => "Indeks Akses terhadap Keadilan (Access to justice index)", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.4.1',  "nama_indikator" => "Total nilai aliran dana gelap masuk dan keluar negeri ( dalam US$).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.4.2',  "nama_indikator" => "Proporsi senjata yang disita, baik yang ditemukan maupun yang diserahkan, yang asal senjata serta konteksnya telah dilacak atau diresmikan oleh otoritas yang berkompeten yang sejalan dengan instrumen internasional", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.5.1',  "nama_indikator" => "Proporsi penduduk yang memiliki paling tidak satu kontak hubungan dengan petugas, yang membayar suap kepada petugas atau diminta untuk menyuap petugas tersebut dalam 12 bulan terakhir", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.5.1.(a)',  "nama_indikator" => "Indeks Perilaku Anti korupsi (IPAK).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.5.2',  "nama_indikator" => "Proporsi pelaku usaha yang paling tidak memiliki kontak dengan petugas pemerintah dan yang membayar suap kepada seorang petugas, atau diminta untuk membayar suap oleh petugas-petugas, selama 12 bulan terakhir.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.6.1',  "nama_indikator" => "Proporsi pengeluaran utama pemerintah terhadap anggaran yang disetujui", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.6.1.(a)',  "nama_indikator" => "Persentase opini instansi pemerintah yang mendapat opini WTP", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.6.1.(b)',  "nama_indikator" => "Persentase instansi pemerintah dengan sakip ≥ B", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.6.1.(c)',  "nama_indikator" => "Persentase instansi pemerintah dengan Indeks RB ≥ B", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.6.2',  "nama_indikator" => "Proporsi penduduk yang puas terhadap pengalaman terakhir atas layanan publik.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.6.2.(a)',  "nama_indikator" => "Jumlah Instansi pemerintah dengan tingkat kepatuhan pelayanan publik kategori baik.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.7.1',  "nama_indikator" => "Proporsi jabatan di lembaga nasional dan daerah, meliputi (a) lembaga legislatif; (b) lembaga pelayanan publik; (c) lembaga peradilan, dibanding distribusi nasional, menurut jenis kelamin, kelompok umur, orang dengan disabilitas dan kelompok masyarakat", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.7.1.(a)',  "nama_indikator" => "Persentase keterwakilan perempuan di Dewan Perwakilan Rakyat (DPR) danDewan Perwakilan Rakyat Daerah (DPRD).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.7.1.(b)',  "nama_indikator" => "Persentase keterwakilan perempuan sebagai pengambilan keputusan di lembaga eksekutif (Eselon I dan II).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.7.2',  "nama_indikator" => "Proporsi penduduk yang percaya pada pengambilan keputusan yang inklusif dan responsif menurut jenis kelamin, umur, difabilitas dan kelompok masyarakat", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.7.2.(a)',  "nama_indikator" => "Indeks Kapasitas lembaga demokrasi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.7.2.(b)',  "nama_indikator" => "Indeks Aspek kebebasan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.7.2.(c)',  "nama_indikator" => "Indeks kesetaraan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.8.1',  "nama_indikator" => "Proporsi keanggotaan dan hak pengambilan keputusan dari negara-negara berkembang di Organisasi internasional", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.8.1.(a.)',  "nama_indikator" => "Jumlah keanggotaan dan kontribusi dalam forum dan organisasi internasional", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.9.1',  "nama_indikator" => "Proporsi anak umur di bawah 5 tahun yang kelahirannya dicatat oleh lembaga pencatatan sipil menurut umur", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.9.1.(a)',  "nama_indikator" => "Persentase kepemilikan akta lahir untuk penduduk 0-17 tahun pada 40% berpendapatan bawah", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.9.1.(b)',  "nama_indikator" => "Persentase cakupan kepemilikan akta kelahiran pada penduduk 0-17 tahun", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.9.1.(b)',  "nama_indikator" => "Jumlah kasus terverifikasi atas pembunuhan, penculikan dan penghilangan secara paksa, penahanan sewenang-wenang dan penyiksaan terhadap jurnalis, awak media, serikat pekerja, dan pembela HAM dalam 12 bulan terakhir", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.10.1.(a)',  "nama_indikator" => "Indikator Kebebasan dari kekerasan bagi jurnalis dan awak media", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.10.1.(b)',  "nama_indikator" => "Jumlah penanganan pengaduan pelanggaran Hak Asasi Manusia (HAM).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.10.1.(c)',  "nama_indikator" => "Jumlah penanganan pengaduan pelanggaran Hak Asasi Manusia (HAM) perempuan terutama kekerasan terhadap perempuan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.10.2',  "nama_indikator" => "Jumlah negara yang mengadopsi dan melaksanakan konstitusi, statutori dan/atau jaminan kebijakan untuk akses publik pada informasi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.10.2.(a)',  "nama_indikator" => "Jumlah Badan Publik yang berkualifikasi informatif", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.10.2.(b)',  "nama_indikator" => "Jumlah penyelesaian sengketa informasi publik melalui mediasi dan/atau ajudikasi non litigasi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.a.1',  "nama_indikator" => "Tersedianya lembaga hak asasi manusia (HAM) nasional yang independen yang sejalan dengan Paris principles", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.b.1',  "nama_indikator" => "Proporsi penduduk yang melaporkan mengalami diskriminasi dan pelecehan dalam 12 bulan lalu berdasarkan pada pelarangan diskriminasi menurut hukum HAM Internasional", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 16, 'kode_indikator' => '16.b.1.(a)',  "nama_indikator" => "Jumlah kebijakan yang diskriminatif dalam 12 bulan lalu berdasarkan pelarangan diskriminasi menurut hukum HAM Internasional.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.1.1',  "nama_indikator" => "Total pendapatan pemerintah sebagai proporsi terhadap PDB menurut sumber", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.1.1.(a)',  "nama_indikator" => "Rasio penerimaan pajak terhadap PDB", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.1.2',  "nama_indikator" => "Proporsi anggaran domestik yang didanai oleh pajak domestik", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.2.1',  "nama_indikator" => "Bantuan Pembangunan bersih, secara keseluruhan dan kepada negara-negara kurang berkembang, sebagai proporsi terhadap Pendapatan Nasional Bruto dari OECD/komite Bantuan pembangunan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.2.1.(a)',  "nama_indikator" => "Proporsi ODA terhadap PDB dan PNB", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.3.1',  "nama_indikator" => "Investasi Asing langsung (Foreign Direct Investment/FDI), bantuan pembangunan dan Kerjasama selatan sebagai proporsi dari pendapatan nasional bruto.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.3.2',  "nama_indikator" => "Volume pengiriman uang/remitansi (dalam US dollars) sebagai proporsi terhadap total PDB", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.3.2.(a)',  "nama_indikator" => "Proporsi volume remitansi TKI (dalam US dollars) terhadap PDB", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.4.1',  "nama_indikator" => "Proporsi pembayaran utang dan bunga (Debt Service) ekspor barang dan jasa", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.5.1',  "nama_indikator" => "Jumlah negara yang mengadopsi dan melaksanakan rezim promosi investasi untuk negara- negara berkembang termasuk negara-negara kurang berkembang", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.6.1',  "nama_indikator" => "Langganan broadband internet tetap per 100 penduduk menurut tingkat kecepatannya", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.6.1.(a)',  "nama_indikator" => "Persentase pelanggan terlayani jaringan internet akses tetap pitalebar (fixed broadband) terhadap total rumah tangga", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.6.1.(b)',  "nama_indikator" => "Persentase kecamatan yang Terjangkau infrastruktur jaringan serat optik (Kumulatif)", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.7.1',  "nama_indikator" => "Total jumlah dana untuk negara - negara berkembang untuk mempromosikan pengembangan, transfer, mendiseminasikan dan menyebarkan teknologi yang ramah lingkungan.", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.8.1',  "nama_indikator" => "Persentase pengguna internet", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.9.1',  "nama_indikator" => "Nilai dolar atas bantuan teknis dan pembiayaan ( termasuk melalui kerjasama utara-selatan,Selatan-Selatan dan Tirangular) yang dikomitmenkan untuk negara-negara berkembang", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.9.1.(a)',  "nama_indikator" => "Jumlah pendanaan kegiatan kerja sama pembangunan internasional termasuk KSST", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.9.1.(b)',  "nama_indikator" => "Jumlah program/kegiatan kerja Sama Selatan-Selatan dan Tringular", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.10.1',  "nama_indikator" => "Rata-rata tarif terbobot dunia Free Trade Agreement (FTA)", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.10.1(a)',  "nama_indikator" => "Jumlah PTA/FTA/CEPA yang disepakati", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.11.1',  "nama_indikator" => "Bagian negara berkembang dan kurang berkembang pada ekspor global", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.11.1.(a)',  "nama_indikator" => "Pertumbuhan ekspor produk non migas", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.12.1',  "nama_indikator" => "Rata-rata tarif terbobot yang dihadapi oleh negara-negara berkembang, negara kurang berkembang dan negara berkembang pulau kecil", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.13.1',  "nama_indikator" => "Tersedianya Dashboard makroekonomi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.14.1',  "nama_indikator" => "Jumlah negara yang telah memiliki mekanisme untuk keterpaduan kebijakan pembangunan berkelanjutan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.15.1',  "nama_indikator" => "Jangkauan penggunaan kerangka kerja dan alat perencanaan yang dimiliki negara oleh penyedia kerjasama pembangunan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.16.1',  "nama_indikator" => "Jumlah negara yang melaporkan perkembangan kerangka kerja monitoring efektivitas pembangunan multi-stakeholder yang mendukung pencapaian tujuan pembangunan berkelanjutan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.17.1',  "nama_indikator" => "Jumlah komitmen untuk kemitraan publik-swasta untuk infrastruktur (dalam US dollars).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.17.1.(a)',  "nama_indikator" => "Jumlah Dokumen daftar Rencana Proyek KPBU (DRK) yang diterbitkan setiap tahun", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.17.1.(b)',  "nama_indikator" => "Jumlah proyek yang ditawarkan untuk dilaksanakan dengan skema Kerjasama Pemerintah dan Badan Usaha (KPBU).", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.17.1.(c)',  "nama_indikator" => "jumlah nilai investasi proyek KPBU berdasarkan tahap perencanaan, penyiapan dan transaksi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.18.1',  "nama_indikator" => "Indikator-indikator statistik untuk pemantauan SDGs", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.18.1.(a)',  "nama_indikator" => "Persentase pengguna data yang menggunakan data BPS sebagai dasar perencanaan, monitoring dan evaluasi pembangunan nasional", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.18.1.(b)',  "nama_indikator" => "Persentase publikasi statistik yang menerapkan standar akurasi sebagai dasar perencanaan, monitoring dan evaluasi pembangunan nasional", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.18.2',  "nama_indikator" => "Jumlah negara yang memiliki undang-undang statistik nasional yang tunduk pada Prinsip-prinsip fundamental Statistik resmi", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.18.3',  "nama_indikator" => "Jumlah negara dengan Perencanaan Statistik nasional yang didanai dan melaksanakan rencananya berdasarkan sumber pendanaan", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.19.1',  "nama_indikator" => "Nilai dolar atas semua sumber yang tersedia untuk penguatan kapasitas statistik di negara-negara berkembang", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.19.1.(a)',  "nama_indikator" => "Persentase K/L/D/I yang melaksanakan rekomendasi kegiatan statistik", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.19.1.(b)',  "nama_indikator" => "Persentase K/L/D/I yang menyampaikan metadata sektoral dan khusus sesuai standar", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.19.2',  "nama_indikator" => "Proporsi negara yang a) melaksanakan paling tidak satu Sensus Penduduk dan Perumahan dalam sepuluh tahun terakhir, dan b) mencapai 100 persen pencatatan kelahiran dan 80 persen pencatatan kematian", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.19.2 (a)',  "nama_indikator" => "Terlaksananya sensus Penduduk dan Perumahan pada tahun 2020", 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'tujuan_id' => 17, 'kode_indikator' => '17.19.2.(b)',  "nama_indikator" => "Tersedianya data registrasi terkait kelahiran dan kematian (Vital Statistics Register).", 'created_at'=> now(), 'updated_at'=> now()
            ]
        ];
        Indikator::query()->insert($indikator);
    }
}
