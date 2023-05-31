<?php

namespace Database\Seeders;

use App\Models\SubIndikator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubIndikatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subindikator = [
            [
                'indikator_id' => 1,  'nama_sub' => 'Memberantas kemiskinan ekstrim',
            ],
            [
                'indikator_id' => 1,  'nama_sub' => 'Mengurangi kemiskinan setidaknya 50%',
            ],
            [
                'indikator_id' => 1,  'nama_sub' => 'Melaksanakan sistem perlindungan sosial',
            ],
            [
                'indikator_id' => 1,  'nama_sub' => 'Persamaan hak untuk kepemilikan, layanan dasar, teknologi dan sumber daya ekonomi',
            ],
            [
                'indikator_id' => 1,  'nama_sub' => 'Membangun ketahanan terhadap bencana lingkungan, ekonomi dan sosial',
            ],
            [
                'indikator_id' => 1,  'nama_sub' => '1.A Mobilisasi sumber daya untuk mengimplementasikan kebijakan serta mengakhiri kemiskinan',
            ],
            [
                'indikator_id' => 1,  'nama_sub' => '1.B Menciptakan kebijakan yang berpihak pada kaum miskin dan peka gender',
            ],
            [
                'indikator_id' => 2,  'nama_sub' => 'Akses umum terhadap makanan yang aman dan bergizi',
            ],
            [
                'indikator_id' => 2,  'nama_sub' => 'Mengakhiri segala bentuk malnutrisi',
            ],
            [
                'indikator_id' => 2,  'nama_sub' => 'Pengoptimalan produktivitas dan pendapatan dari produsen makanan skala kecil',
            ],
            [
                'indikator_id' => 2,  'nama_sub' => 'Produksi pangan berkelanjutan dan praktik pertanian yang tangguh',
            ],
            [
                'indikator_id' => 2,  'nama_sub' => 'Mempertahankan keragaman genetik dalam produksi pangan',
            ],
            [
                'indikator_id' => 2,  'nama_sub' => '2.A Berinvestasi dalam infrastruktur pedesaan, penelitian pertanian, teknologi dan bank ',
            ],
            [
                'indikator_id' => 2,  'nama_sub' => '2.B Mencegah pembatasan perdagangan pertanian, distorsi pasar dan subsidi ekspor',
            ],
            [
                'indikator_id' => 2,  'nama_sub' => '2.C Memastikan pasar komoditas pangan yang stabil dan akses informasi yang tepat waktu',
            ],
            [
                'indikator_id' => 3,  'nama_sub' => 'Upaya pengurangan kematian ibu',
            ],
            [
                'indikator_id' => 3,  'nama_sub' => 'Memberantas semua kematian di bawah usia 5 tahun',
            ],
            [
                'indikator_id' => 3,  'nama_sub' => 'Memerangi penyakit menular',
            ],
            [
                'indikator_id' => 3,  'nama_sub' => 'Mengurangi moralitas dari penyakit tidak menular dan meningkatkan kesehatan mental',
            ],
            [
                'indikator_id' => 3,  'nama_sub' => 'Mencegah dan mengobati penyakit',
            ],
            [
                'indikator_id' => 3,  'nama_sub' => 'Mengurangi cedera jalan dan kematian',
            ],
            [
                'indikator_id' => 3,  'nama_sub' => 'Akses menyeluruh pada perawatan seksual dan reproduksi, keluarga berencana dan pendidikan',
            ],
            [
                'indikator_id' => 3,  'nama_sub' => 'Tercapai kesehatan tingkat umum atau menyeluruh',
            ],
            [
                'indikator_id' => 3,  'nama_sub' => 'Mengurangi penyakit dan kematian akibat bahan kimia berbahaya dan polusi',
            ],
            [
                'indikator_id' => 3,  'nama_sub' => '3.A Melaksanakan konvensi kerangka kerja WHO tentang pengendalian penyakit',
            ],
            [
                'indikator_id' => 3,  'nama_sub' => '3.B Penelitian, pengembangan dan akses merata terhadap vaksin dan obat-obatan yang terjangkau',
            ],
            [
                'indikator_id' => 3,  'nama_sub' => '3.C Meningkatkan pembiayaan kesehatan dan mendukung tenaga kesehatan di negara berkembang',
            ],
            [
                'indikator_id' => 3,  'nama_sub' => '3.D Meningkatkan sistem peringatan dini untuk risiko kesehatan global',
            ],
            [
                'indikator_id' => 4,  'nama_sub' => 'Gratis pendidikan dasar dan menengah',
            ],
            [
                'indikator_id' => 4,  'nama_sub' => 'Pemerataan akses terhadap pendidikan anak usia dini yang berkualitas',
            ],
            [
                'indikator_id' => 4,  'nama_sub' => 'Akses yang merata kepada pendidikan teknis, kejuruan, dan tinggi yang terjangkau',
            ],
            [
                'indikator_id' => 4,  'nama_sub' => 'Meningkatkan sumber daya manusia terkait terampilan yang relevan untuk kesuksesan finansial',
            ],
            [
                'indikator_id' => 4,  'nama_sub' => 'Menghilangkan semua jenis diskriminasi dalam pendidikan',
            ],
            [
                'indikator_id' => 4,  'nama_sub' => 'Pemerataan literasi dan numerasi ',
            ],
            [
                'indikator_id' => 4,  'nama_sub' => 'Pendidikan untuk pembangunan berkelanjutan dan kewarganegaraan global',
            ],
            [
                'indikator_id' => 4,  'nama_sub' => '4.A Membangun dan meningkatkan sekolah inklusif dan aman',
            ],
            [
                'indikator_id' => 4,  'nama_sub' => '4.B Memperluas beasiswa pendidikan tinggi untuk negara berkembang',
            ],
            [
                'indikator_id' => 4,  'nama_sub' => '4.C Meningkatkan pasokan guru yang berkualitas di setiap daerah',
            ],
            [
                'indikator_id' => 5,  'nama_sub' => 'Mengakhiri diskriminasi terhadap perempuan dan anak perempuan',
            ],
            [
                'indikator_id' => 5,  'nama_sub' => 'Mengakhiri semua kekerasan dan eksploitasi terhadap perempuan dan anak',
            ],
            [
                'indikator_id' => 5,  'nama_sub' => 'Hilangkan pernikahan paksa dan mutilasi alat kelamin',
            ],
            [
                'indikator_id' => 5,  'nama_sub' => 'Nilai perawatan dan pengenalan tanggung jawab rumah tangga bersama',
            ],
            [
                'indikator_id' => 5,  'nama_sub' => 'Memastikan partisipasi penuh dalam kepemimpinan dan pengambilan keputusan',
            ],
            [
                'indikator_id' => 5,  'nama_sub' => 'Pemerataab terhadap kesehatan dan hak reproduksi',
            ],
            [
                'indikator_id' => 5,  'nama_sub' => '5.A Hak yang sama atas sumber daya ekonomi, kepemilikan properti, dan layanan keuangan',
            ],
            [
                'indikator_id' => 5,  'nama_sub' => '5.B Pemerataan pemberdayaan perempuan melalui teknologi',
            ],
            [
                'indikator_id' => 5,  'nama_sub' => '5.C Mengadopsi dan memperkuat kebijakan undang-undang yang dapat ditegakkan untuk kesetaraan gender',
            ],
            [
                'indikator_id' => 6,  'nama_sub' => 'Air minum yang aman dan terjangkau',
            ],
            [
                'indikator_id' => 6,  'nama_sub' => 'Mengakhiri buang air besar sembarangan dan menyediakan akses ke sanitasi dan kebersihan',
            ],
            [
                'indikator_id' => 6,  'nama_sub' => 'Meningkatkan kualitas air, pengolahan air limbah, dan penggunaan kembali yang aman',
            ],
            [
                'indikator_id' => 6,  'nama_sub' => 'Meniingkatkan efisiensi penggunaan air dan pastikan pasokan air bersih',
            ],
            [
                'indikator_id' => 6,  'nama_sub' => 'Menerapkan pengelolaan sumber daya air terpadu',
            ],
            [
                'indikator_id' => 6,  'nama_sub' => 'Melindungi dan memulihkan ekosistem yang berhubungan dengan air',
            ],
            [
                'indikator_id' => 6,  'nama_sub' => '6.A Memperluas dukungan air dan sanitasi ',
            ],
            [
                'indikator_id' => 6,  'nama_sub' => '6.B Mendukung keterlibatan lokal dalam pengelolaan air dan sanitasi',
            ],
            [
                'indikator_id' => 7,  'nama_sub' => 'Akses universal ke energi modern',
            ],
            [
                'indikator_id' => 7,  'nama_sub' => 'Meningkatkan persentase global energi terbarukan',
            ],
            [
                'indikator_id' => 7,  'nama_sub' => 'Menggandakan peningkatan efisiensi energi',
            ],
            [
                'indikator_id' => 7,  'nama_sub' => '7.A Mengenalkan akses penelitian, teknologi, dan investasi dalam energi bersih',
            ],
            [
                'indikator_id' => 7,  'nama_sub' => '7.B Memperluas dan meningkatkan layanan energi ',
            ],
            [
                'indikator_id' => 8,  'nama_sub' => 'Pertumbuhan Ekonomi Berkelanjutan',
            ],
            [
                'indikator_id' => 8,  'nama_sub' => 'Diversifikasi, inovasi, dan peningkatan untuk produktivitas ekonomi',
            ],
            [
                'indikator_id' => 8,  'nama_sub' => 'Mempromosikan kebijakan untuk mendukung penciptaan lapangan kerja dan pertumbuhan perusahaan',
            ],
            [
                'indikator_id' => 8,  'nama_sub' => 'Meningkatkan efisiensi sumber daya dalam konsumsi dan produksi',
            ],
            [
                'indikator_id' => 8,  'nama_sub' => 'Pekerjaan penuh dan pekerjaan yang layak dengan upah yang sama',
            ],
            [
                'indikator_id' => 8,  'nama_sub' => 'Mempromosikan lapangan kerja, pendidikan dan pelatihan kaum muda',
            ],
            [
                'indikator_id' => 8,  'nama_sub' => 'Akhiri perbudakan modern, perdagangan manusia dan pekerja anak',
            ],
            [
                'indikator_id' => 8,  'nama_sub' => 'Melindungi hak-hak buruh dan mempromosikan lingkungan kerja yang aman',
            ],
            [
                'indikator_id' => 8,  'nama_sub' => 'Mempromosikan pariwisata yang bermanfaat dan berkelanjutan',
            ],
            [
                'indikator_id' => 8,  'nama_sub' => 'Akses menyeluruh ke layanan perbankan, asuransi, dan keuangan',
            ],
            [
                'indikator_id' => 8,  'nama_sub' => '8.A Peningkatan dukungan perdagangan',
            ],
            [
                'indikator_id' => 8,  'nama_sub' => '8.B Kembangkan strategi ketenagakerjaan muda global',
            ],
            [
                'indikator_id' => 9,  'nama_sub' => 'Mengembangkan infrastruktur yang berkelanjutan, tangguh dan inklusif',
            ],
            [
                'indikator_id' => 9,  'nama_sub' => 'Mendorong industrialisasi yang inklusif dan berkelanjutan',
            ],
            [
                'indikator_id' => 9,  'nama_sub' => 'Meningkatkan akses ke layanan keuangan dan pasar',
            ],
            [
                'indikator_id' => 9,  'nama_sub' => 'Tingkatkan semua industri dan infrastruktur keberlanjutan',
            ],
            [
                'indikator_id' => 9,  'nama_sub' => 'Pertukaran penelitian dan tingkatkan teknologi industri',
            ],
            [
                'indikator_id' => 9,  'nama_sub' => '9.A Memfasilitasi pembangunan infrastruktur yang berkelanjutan untuk negara-negara berkembang',
            ],
            [
                'indikator_id' => 9,  'nama_sub' => '9.B Mendukung pengembangan teknologi dalam negeri dan diversifikasi industri',
            ],
            [
                'indikator_id' => 9,  'nama_sub' => '9.C Akses meyeluruh terhadap teknologi informasi dan komunikasi',
            ],
            [
                'indikator_id' => 10,  'nama_sub' => 'Mengurangi ketimpangan pendapatan',
            ],
            [
                'indikator_id' => 10,  'nama_sub' => 'Mempromosikan inklusi sosial, ekonomi dan politik secara menyeluruh',
            ],
            [
                'indikator_id' => 10,  'nama_sub' => 'Menjamin kesempatan yang sama dan mengakhiri diskriminasi',
            ],
            [
                'indikator_id' => 10,  'nama_sub' => 'Mengadopsi kebijakan fiskal dan sosial yang mempromosikan kesetaraan',
            ],
            [
                'indikator_id' => 10,  'nama_sub' => 'Meningkatkan regulasi pasar dan lembaga keuangan menyeluruh',
            ],
            [
                'indikator_id' => 10,  'nama_sub' => ' Peningkatan lembaga keuangan',
            ],
            [
                'indikator_id' => 10,  'nama_sub' => 'Kebijakan migrasi yang bertanggung jawab dan dikelola dengan baik',
            ],
            [
                'indikator_id' => 10,  'nama_sub' => '10.A Perlakuan khusus  untuk negara berkembang',
            ],
            [
                'indikator_id' => 10,  'nama_sub' => '10.B Mendorong bantuan pembangunan dan investasi di negara kurang berkembang',
            ],
            [
                'indikator_id' => 10,  'nama_sub' => '10.C Mengurangi biaya transaksi untuk pengiriman uang migran',
            ],
            [
                'indikator_id' => 11,  'nama_sub' => 'Perumahan yang aman dan terjangkau',
            ],
            [
                'indikator_id' => 11,  'nama_sub' => 'Sistem transportasi yang terjangkau dan berkelanjutan',
            ],
            [
                'indikator_id' => 11,  'nama_sub' => 'Urbanisasi yang inklusif dan berkelanjutan',
            ],
            [
                'indikator_id' => 11,  'nama_sub' => 'Melindungi warisan budaya dan alam dunia',
            ],
            [
                'indikator_id' => 11,  'nama_sub' => 'Mengurangi dampak buruk dari bencana alam',
            ],
            [
                'indikator_id' => 11,  'nama_sub' => 'Mengurangi dampak lingkungan kota',
            ],
            [
                'indikator_id' => 11,  'nama_sub' => 'Menyediakan akses ke ruang hijau dan publik yang aman dan inklusif',
            ],
            [
                'indikator_id' => 11,  'nama_sub' => '11.A Perencanaan pembangunan nasional dan daerah yang kuat',
            ],
            [
                'indikator_id' => 11,  'nama_sub' => '11.B Menerapkan kebijakan untuk inklusi, efisiensi sumber daya dan pengurangan risiko bencana',
            ],
            [
                'indikator_id' => 11,  'nama_sub' => '11.C Mendukung negara kurang berkembang dalam bangunan yang berkelanjutan dan tangguh',
            ],
            [
                'indikator_id' => 12,  'nama_sub' => 'Menerapkan kerangka konsumsi dan produksi berkelanjutan selama 10 tahun',
            ],
            [
                'indikator_id' => 12,  'nama_sub' => 'Pengelolaan berkelanjutan dan penggunaan sumber daya alam',
            ],
            [
                'indikator_id' => 12,  'nama_sub' => 'Mengurangi separuh makanan global per kapita',
            ],
            [
                'indikator_id' => 12,  'nama_sub' => 'Pengelolaan bahan kimia dan limbah yang bertanggung jawab',
            ],
            [
                'indikator_id' => 12,  'nama_sub' => 'Mengurangi timbulan sampah secara substansial',
            ],
            [
                'indikator_id' => 12,  'nama_sub' => 'Mendorong perusahaan untuk mengadopsi praktik berkelanjutan dan pelaporan keberlanjutan',
            ],
            [
                'indikator_id' => 12,  'nama_sub' => 'Mempromosikan praktik pengadaan publik yang berkelanjutan',
            ],
            [
                'indikator_id' => 12,  'nama_sub' => 'Mempromosikan pemahaman universal tentang gaya hidup berkelanjutan',
            ],
            [
                'indikator_id' => 12,  'nama_sub' => '12.A Dukungan kapasitas ilmiah dan teknologi negara berkembang untuk konsumsi dan produksi yang berkelanjutan',
            ],
            [
                'indikator_id' => 12,  'nama_sub' => '12.B Mengembangkan dan menerapkan alat untuk memantau pariwisata berkelanjutan',
            ],
            [
                'indikator_id' => 12,  'nama_sub' => '12.C Menghilangkan distorsi pasar yang mendorong pemborosan tingkat konsumsi',
            ],
            [
                'indikator_id' => 13,  'nama_sub' => 'Memperkuat ketahanan dan kapasitas adaptasi terhadap bencana terkait iklim',
            ],
            [
                'indikator_id' => 13,  'nama_sub' => 'Integrasi langkah-langkah perubahan iklim ke dalam kebijakan dan perencanaan',
            ],
            [
                'indikator_id' => 13,  'nama_sub' => 'Membangun pengetahuan dan kapasitas untuk menghadapi perubahan iklim',
            ],
            [
                'indikator_id' => 13,  'nama_sub' => '13.A Menerapkan konvensi kerangka kerja yang menyenangkan tentang perubahan iklim',
            ],
            [
                'indikator_id' => 13,  'nama_sub' => '13.B Mempromosikan mekanisme untuk meningkatkan kapasitas perencanaan dan pengelolaan iklim',
            ],
            [
                'indikator_id' => 14,  'nama_sub' => 'Mengurangi polusi laut',
            ],
            [
                'indikator_id' => 14,  'nama_sub' => 'Melindungi dan memulihkan ekosistem',
            ],
            [
                'indikator_id' => 14,  'nama_sub' => 'Mengurangi pengasaman laut',
            ],
            [
                'indikator_id' => 14,  'nama_sub' => 'Penangkapan ikan yang berkelanjutan',
            ],
            [
                'indikator_id' => 14,  'nama_sub' => 'Mencakup wilayah pesisir dan laut',
            ],
            [
                'indikator_id' => 14,  'nama_sub' => 'Mengakhiri subsidi yang berkontribusi terhadap penangkapan ikan berlebihan',
            ],
            [
                'indikator_id' => 14,  'nama_sub' => 'Meningkatkan manfaat ekonomi dari pemanfaatan sumber daya secara berkelanjutan',
            ],
            [
                'indikator_id' => 14,  'nama_sub' => '14.A Meningkatkan pengetahuan ilmiah, penelitian dan teknologi untuk kesehatan laut',
            ],
            [
                'indikator_id' => 14,  'nama_sub' => '14.B Mendukung nelayan skala kecil',
            ],
            [
                'indikator_id' => 14,  'nama_sub' => '14.C Melaksanakan dan menegakkan hukum laut internasional',
            ],
            [
                'indikator_id' => 15,  'nama_sub' => 'Mengkonversi dan memulihkan ekosistem darat dan air tawar',
            ],
            [
                'indikator_id' => 15,  'nama_sub' => 'Mengakhiri deforestasi dan memulihkan hutan yang terdegradasi',
            ],
            [
                'indikator_id' => 15,  'nama_sub' => 'Mengurangi penggurunan dan pulihkan lahan terdegradasi',
            ],
            [
                'indikator_id' => 15,  'nama_sub' => 'Menjamin kelestarian ekosistem pegunungan',
            ],
            [
                'indikator_id' => 15,  'nama_sub' => 'Melindungi keanekaragaman hayati dan habitat alami',
            ],
            [
                'indikator_id' => 15,  'nama_sub' => 'Mengenalkan akses ke sumber daya genetik dan pembagian keuntungan yang adil',
            ],
            [
                'indikator_id' => 15,  'nama_sub' => 'Menghilangkan perburuan dan perdagangan spesies yang dilindungi',
            ],
            [
                'indikator_id' => 15,  'nama_sub' => 'Mencegah spesies asing invasif di darat dan di ekosistem air',
            ],
            [
                'indikator_id' => 15,  'nama_sub' => 'Keterpaduan ekosistem dan keanekaragaman hayati dalam perencanaan pemerintah',
            ],
            [
                'indikator_id' => 15,  'nama_sub' => '15.A Meningkatkan sumber daya keuangan untuk melestarikan dan memanfaatkan ekosistem dan keanekaragaman hayati secara berkelanjutan',
            ],
            [
                'indikator_id' => 15,  'nama_sub' => '15.B Mendanai dan memberi insentif pada pengelolaan hutan lestari',
            ],
            [
                'indikator_id' => 15,  'nama_sub' => '15.C Memadatkan perburuan dan perdagangan global',
            ],
            [
                'indikator_id' => 16,  'nama_sub' => 'Kurangi kekerasan di mana-mana',
            ],
            [
                'indikator_id' => 16,  'nama_sub' => 'Melindungi anak dari penyalahgunaan, eksploitasi, perdagangan, dan kekerasan',
            ],
            [
                'indikator_id' => 16,  'nama_sub' => 'Mengenalkan supremasi hukum dan menjamin akses yang sama terhadap keadilan',
            ],
            [
                'indikator_id' => 16,  'nama_sub' => 'Memerangi kejahatan terorganisir dan aliran keuangan dan senjata terlarang',
            ],
            [
                'indikator_id' => 16,  'nama_sub' => 'Secara substansial mengurangi korupsi dan penyuapan',
            ],
            [
                'indikator_id' => 16,  'nama_sub' => 'Mengembangkan kelembagaan yang efektif, akuntabel dan transparan',
            ],
            [
                'indikator_id' => 16,  'nama_sub' => 'Memastikan pengambilan keputusan yang responsif, inklusif, dan representatif',
            ],
            [
                'indikator_id' => 16,  'nama_sub' => 'Memperkuat partisipasi dalam pemerintahan global',
            ],
            [
                'indikator_id' => 16,  'nama_sub' => 'Memberikan identitas hukum universal',
            ],
            [
                'indikator_id' => 16,  'nama_sub' => 'Menjamin akses publik terhadap informasi dan melindungi kebebasan fundamental',
            ],
            [
                'indikator_id' => 16,  'nama_sub' => '16.A Memperkuat institusi nasional untuk mencegah kekerasan dan memerangi terorisme dan kejahatan',
            ],
            [
                'indikator_id' => 16,  'nama_sub' => '16.B Mempromosikan dan menegakkan hukum dan kebijakan non-diskriminatif',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Memobilisasi sumber daya untuk meningkatkan pengumpulan pendapatan dalam negeri',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Melaksanakan semua komitmen bantuan pembangunan',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Memobilisasi sumber daya keuangan untuk negara-negara berkembang',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Membantu negara-negara berkembang dalam mencapai kesinambungan utang',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Berinvestasi di negara-negara terbelakang',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Berbagi pengetahuan dan kerjasama untuk akses ke ilmu pengetahuan, teknologi dan inovasi',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Mempromosikan teknologi berkelanjutan ke negara-negara berkembang',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Memperkuat sains, teknologi, dan inovasi untuk negara-negara kurang berkembang',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Meningkatkan kapasitas SDG di negara-negara berkembang',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Mengenalkan sistem perdagangan universal di bawah WTO',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Meningkatkan ekspor negara-negara berkembang',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Menghapus hambatan perdagangan untuk negara kurang berkembang',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Meningkatkan stabilitas ekonomi makro global',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Meningkatkan koherensi kebijakan untuk pembangunan berkelanjutan',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Menghormati kepemimpinan nasional untuk menerapkan kebijakan dengan tujuan pembangunan berkelanjutan',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Meningkatkan kemitraan global untuk pembangunan berkelanjutan',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Mendorong kemitraan yang efektif',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Tingkatkan ketersediaan data yang andal',
            ],
            [
                'indikator_id' => 17,  'nama_sub' => 'Mengembangakan kemajuan lebih lanjut',
            ]
        ];
        SubIndikator::query()->insert($subindikator);
    }
}
