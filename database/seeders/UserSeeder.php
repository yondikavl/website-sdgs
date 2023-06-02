<?php

namespace Database\Seeders;

use App\Models\User;
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
                'email' => 'super@admin.com',
                'roles_id' => 1,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'nama' => 'Bappeda',
                'email' => 'admin@admin.com',
                'roles_id' => 2,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'created_at'=> now(),
                'updated_at'=> now()
            ]  
        ];
        User::query()->insert($user);
    }
}
