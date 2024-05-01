<?php

namespace Database\Seeders;

use App\Models\Tujuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tujuan = [
            [
                'id' => 1,
                'pilar_id' => 1, // 'Pilar Pembangunan Sosial
                'ikon_tujuan' => 'sdgs(1).png',
                'nama_tujuan' => 'Tidak ada kemiskinan',
                'deskripsi_tujuan' => 'Mengurangi tingkat kemiskinan dan ketimpangan ekonomi antar masyarakat', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 2,
                'pilar_id' => 1, // 'Pilar Pembangunan Sosial
                'ikon_tujuan' => 'sdgs(2).png',
                'nama_tujuan' => 'Akses Pangan',
                'deskripsi_tujuan' => 'Meningkatkan akses dan ketersediaan pangan yang sehat dan bergizi untuk semua orang', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 3,
                'pilar_id' => 1, // 'Pilar Pembangunan Sosial
                'ikon_tujuan' => 'sdgs(3).png',
                'nama_tujuan' => 'Kesehatan dan Kesejahteraan',
                'deskripsi_tujuan' => 'Meningkatkan kualitas kesehatan dan kesejahteraan masyarakat', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 4,
                'pilar_id' => 1, // 'Pilar Pembangunan Sosial
                'ikon_tujuan' => 'sdgs(4).png',
                'nama_tujuan' => 'Pendidikan berkualitas',
                'deskripsi_tujuan' => 'Menyediakan akses pendidikan yang merata, berkualitas dan inklusif untuk semua', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 5,
                'pilar_id' => 1, // 'Pilar Pembangunan Sosial
                'ikon_tujuan' => 'sdgs(5).png',
                'nama_tujuan' => 'Persamaan Gender',
                'deskripsi_tujuan' => 'Meningkatkan kesetaraan gender dan memberi ruang yang adil bagi perempuan dan laki-laki', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 6,
                'pilar_id' => 3, // 'Pilar Pembangunan Lingkungan
                'ikon_tujuan' => 'sdgs(6).png',
                'nama_tujuan' => 'Air bersih dan sanitasi',
                'deskripsi_tujuan' => 'Meningkatkan akses terhadap air bersih dan sanitasi yang layak dan terjangkau', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 7,
                'pilar_id' => 2, // 'Pilar Pembangunan Ekonomi
                'ikon_tujuan' => 'sdgs(7).png',
                'nama_tujuan' => 'Energi bersih dan terbarukan',
                'deskripsi_tujuan' => 'Mendorong penggunaan energi bersih dan terbarukan untuk mendukung pembangunan yang berkelanjutan', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 8,
                'pilar_id' => 2, // 'Pilar Pembangunan Ekonomi
                'ikon_tujuan' => 'sdgs(8).png',
                'nama_tujuan' => 'Pekerjaan layak dan pertumbuhan ekonomi',
                'deskripsi_tujuan' => 'Meningkatkan pertumbuhan ekonomi yang inklusif dan berkelanjutan, serta menciptakan lapangan kerja yang layak', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 9,
                'pilar_id' => 2, // 'Pilar Pembangunan Ekonomi
                'ikon_tujuan' => 'sdgs(9).png',
                'nama_tujuan' => 'Inovasi dan Infrastruktur',
                'deskripsi_tujuan' => 'Meningkatkan infrastruktur dan inovasi untuk mendukung pembangunan yang berkelanjutan dan inklusif', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 10,
                'pilar_id' => 1, // 'Pilar Pembangunan Sosial
                'ikon_tujuan' => 'sdgs(10).png',
                'nama_tujuan' => 'Pengurangan ketidaksetaraan',
                'deskripsi_tujuan' => 'Mengurangi ketimpangan dan diskriminasi dalam akses terhadap sumber daya dan kesempatan', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 11,
                'pilar_id' => 3, // 'Pilar Pembangunan Lingkungan
                'ikon_tujuan' => 'sdgs(11).png',
                'nama_tujuan' => 'Kota dan pemukiman yang berkelanjutan',
                'deskripsi_tujuan' => 'Meningkatkan kualitas kota dan pemukiman dengan pendekatan yang berkelanjutan dan inklusif', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 12,
                'pilar_id' => 3, // 'Pilar Pembangunan Lingkungan
                'ikon_tujuan' => 'sdgs(12).png',
                'nama_tujuan' => 'Konsumsi dan produksi yang berkelanjutan',
                'deskripsi_tujuan' => 'Mendorong konsumsi dan produksi yang berkelanjutan dan bertanggung jawab terhadap lingkungan', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 13,
                'pilar_id' => 3, // 'Pilar Pembangunan Lingkungan
                'ikon_tujuan' => 'sdgs(13).png',
                'nama_tujuan' => 'Tindakan terhadap perubahan iklim',
                'deskripsi_tujuan' => 'Mengambil tindakan untuk melindungi lingkungan dan mengurangi dampak perubahan iklim', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 14,
                'pilar_id' => 3, // 'Pilar Pembangunan Lingkungan
                'ikon_tujuan' => 'sdgs(14).png',
                'nama_tujuan' => 'Ekosistem laut',
                'deskripsi_tujuan' => 'Mempromosikan konservasi dan pengelolaan keanekaragaman hayati di laut dan perairan', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 15,
                'pilar_id' => 3, // 'Pilar Pembangunan Lingkungan
                'ikon_tujuan' => 'sdgs(15).png',
                'nama_tujuan' => 'Ekosistem darat',
                'deskripsi_tujuan' => 'Meningkatkan pengelolaan keanekaragaman hayati dan hutan di darat, serta mencegah kerusakan lingkungan', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 16,
                'pilar_id' => 4, // 'Pilar Pembangunan Politik
                'ikon_tujuan' => 'sdgs(16).png',
                'nama_tujuan' => 'Keadilan dan perdamaian',
                'deskripsi_tujuan' => 'Meningkatkan keamanan dan keadilan serta mempromosikan perdamaian yang inklusif dan berkelanjutan', 'created_at'=> now(), 'updated_at'=> now()
            ],
            [
                'id' => 17,
                'pilar_id' => 2, // 'Pilar Pembangunan Ekonomi
                'ikon_tujuan' => 'sdgs(17).png',
                'nama_tujuan' => 'Kemitraan untuk tujuan pembangunan',
                'deskripsi_tujuan' => 'Meningkatkan kemitraan global dan regional untuk mendukung pembangunan yang berkelanjutan dan inklusif', 'created_at'=> now(), 'updated_at'=> now()
            ]
        ];
        Tujuan::query()->insert($tujuan);
    }
}
