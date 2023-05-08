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
                'id' => 1,
                'ikon_indikator' => 'icon-1.png',
                'nama_indikator' => 'Tidak ada kemiskinan',
                'deskripsi_indikator' => 'Mengurangi tingkat kemiskinan dan ketimpangan ekonomi antar masyarakat',
            ],
            [
                'id' => 2,
                'ikon_indikator' => 'icon-2.png',
                'nama_indikator' => 'Akses Pangan',
                'deskripsi_indikator' => 'Meningkatkan akses dan ketersediaan pangan yang sehat dan bergizi untuk semua orang',
            ],
            [
                'id' => 3,
                'ikon_indikator' => 'icon-3.png',
                'nama_indikator' => 'Kesehatan dan Kesejahteraan',
                'deskripsi_indikator' => 'Meningkatkan kualitas kesehatan dan kesejahteraan masyarakat',
            ],
            [
                'id' => 4,
                'ikon_indikator' => 'icon-4.png',
                'nama_indikator' => 'Pendidikan berkualitas',
                'deskripsi_indikator' => 'Menyediakan akses pendidikan yang merata, berkualitas dan inklusif untuk semua',
            ],
            [
                'id' => 5,
                'ikon_indikator' => 'icon-5.png',
                'nama_indikator' => 'Persamaan Gender',
                'deskripsi_indikator' => 'Meningkatkan kesetaraan gender dan memberi ruang yang adil bagi perempuan dan laki-laki',
            ],
            [
                'id' => 6,
                'ikon_indikator' => 'icon-6.png',
                'nama_indikator' => 'Air bersih dan sanitasi',
                'deskripsi_indikator' => 'Meningkatkan akses terhadap air bersih dan sanitasi yang layak dan terjangkau',
            ],
            [
                'id' => 7,
                'ikon_indikator' => 'icon-7.png',
                'nama_indikator' => 'Energi bersih dan terbarukan',
                'deskripsi_indikator' => 'Mendorong penggunaan energi bersih dan terbarukan untuk mendukung pembangunan yang berkelanjutan',
            ],
            [
                'id' => 8,
                'ikon_indikator' => 'icon-8.png',
                'nama_indikator' => 'Pekerjaan layak dan pertumbuhan ekonomi',
                'deskripsi_indikator' => 'Meningkatkan pertumbuhan ekonomi yang inklusif dan berkelanjutan, serta menciptakan lapangan kerja yang layak',
            ],
            [
                'id' => 9,
                'ikon_indikator' => 'icon-9.png',
                'nama_indikator' => 'Inovasi dan Infrastruktur',
                'deskripsi_indikator' => 'Meningkatkan infrastruktur dan inovasi untuk mendukung pembangunan yang berkelanjutan dan inklusif',
            ],
            [
                'id' => 10,
                'ikon_indikator' => 'icon-10.png',
                'nama_indikator' => 'Pengurangan ketidaksetaraan',
                'deskripsi_indikator' => 'Mengurangi ketimpangan dan diskriminasi dalam akses terhadap sumber daya dan kesempatan',
            ],
            [
                'id' => 11,
                'ikon_indikator' => 'icon-11.png',
                'nama_indikator' => 'Kota dan pemukiman yang berkelanjutan',
                'deskripsi_indikator' => 'Meningkatkan kualitas kota dan pemukiman dengan pendekatan yang berkelanjutan dan inklusif',
            ],
            [
                'id' => 12,
                'ikon_indikator' => 'icon-12.png',
                'nama_indikator' => 'Konsumsi dan produksi yang berkelanjutan',
                'deskripsi_indikator' => 'Mendorong konsumsi dan produksi yang berkelanjutan dan bertanggung jawab terhadap lingkungan',
            ],
            [
                'id' => 13,
                'ikon_indikator' => 'icon-13.png',
                'nama_indikator' => 'Tindakan terhadap perubahan iklim',
                'deskripsi_indikator' => 'Mengambil tindakan untuk melindungi lingkungan dan mengurangi dampak perubahan iklim',
            ],
            [
                'id' => 14,
                'ikon_indikator' => 'icon-14.png',
                'nama_indikator' => 'Ekosistem laut',
                'deskripsi_indikator' => 'Mempromosikan konservasi dan pengelolaan keanekaragaman hayati di laut dan perairan',
            ],
            [
                'id' => 15,
                'ikon_indikator' => 'icon-15.png',
                'nama_indikator' => 'Ekosistem darat',
                'deskripsi_indikator' => 'Meningkatkan pengelolaan keanekaragaman hayati dan hutan di darat, serta mencegah kerusakan lingkungan',
            ],
            [
                'id' => 16,
                'ikon_indikator' => 'icon-16.png',
                'nama_indikator' => 'Keadilan dan perdamaian',
                'deskripsi_indikator' => 'Meningkatkan keamanan dan keadilan serta mempromosikan perdamaian yang inklusif dan berkelanjutan',
            ],
            [
                'id' => 17,
                'ikon_indikator' => 'icon-17.png',
                'nama_indikator' => 'Kemitraan untuk tujuan pembangunan',
                'deskripsi_indikator' => 'Meningkatkan kemitraan global dan regional untuk mendukung pembangunan yang berkelanjutan dan inklusif',
            ]
        ];
        Indikator::query()->insert($indikator);
    }
}
