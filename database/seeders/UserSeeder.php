<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = [
            [
                'nama' => 'Super Admin',
                'email' => 'bappeda.kota@bandarlampungkota.go.id',
                'roles_id' => 1,
                'password' => Hash::make('bappeda123'), // password
                'permissions' => null,
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'nama' => 'Admin',
                'email' => 'admin@admin.com',
                'roles_id' => 2,
                'password' => Hash::make('bappeda123'), // password
                'permissions' => null,
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'bagiankerjasama@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'BAGIAN KERJASAMA SEKRETARIAT KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["10", "16", "17"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'bagianhukum@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'BAGIAN HUKUM SEKRETARIAT PEMDA KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["1", "10", "16"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'bapenda@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'BAPENDA KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["8"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'bkd@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'BKD KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["16"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'bpkad@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'BPKAD KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["16", "17"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'bapolpp@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'BAPOLPP KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["16"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinaspangan@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS PANGAN KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["2", "5", "12"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinasbpbd@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS BPBD KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["1", "11", "13"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinasdukcapil@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS DISDUKCAPILKOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["10", "16", "17"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinaskesehatan@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS KESEHATAN KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["1", "2", "3", "4", "5"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinaslingkungan@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS LINGKUNGAN HIDUP KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["6", "7", "11", "12", "13", "15"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinaskelautan@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS KELAUTAN DAN PERIKANAN KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["2", "14"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinaspariwisata@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS PARIWISATA KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["8", "12"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinaspu@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS PEKERJAAN UMUM KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["9", "11"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinaspendidikan@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS PENDIDIKAN DAN KEBUDAYAAN KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["1", "4", "5", "9", "11", "12"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinasperhubungan@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS PERHUBUNGAN KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["11"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinasperindustrian@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS PERINDUSTRIAN KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["9", "12"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinasperumahan@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS PERUMAHAN DAN PEMUKIMAN KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["11"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinassosial@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS SOSIAL KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["1", "10"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinasppa@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS PPA KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["1", "5", "10", "11", "16"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinaskerja@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS TENAGA KERJA KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["1", "2", "8", "10", "17"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'diskominfo@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DISKOMINFO KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["5", "16"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dpmptsp@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DPMPTSP KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["7", "16", "17"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'inspektorat@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'INSPEKTORAT KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["16"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'sekda@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'SEKRETARIS DEWAN KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["16"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'bi@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'BANK INDONESIA',
                'roles_id' => 3,
                'permissions' => json_encode(["10"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinaskumkm@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS KOPERASI DAN UMKM KOTA BANDAR LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["8", "14"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'email' => 'dinaspertanian@sdgs.com',
                'password' => Hash::make('bappeda123'),
                'nama' => 'DINAS PERTANIAN KOTA BANDAR LAMPUNG/KEHUTANAN PROVINSI LAMPUNG',
                'roles_id' => 3,
                'permissions' => json_encode(["15"]),
                'created_at'=> now(),
                'updated_at'=> now()
            ]
        ];
        User::query()->insert($user);
    }
}
