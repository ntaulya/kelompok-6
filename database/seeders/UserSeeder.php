<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User',
            'nomor_id' => '1202190010',
            'email' => 'user@pkbm.com',
            'password' => Hash::make('user'),
            'paket_program' => 'Paket A',
            'ktp_kk' => 'null',
        ]);

        User::create([
            'name' => 'Admin',
            'nomor_id' => 'null',
            'email' => 'admin@pkbm.com',
            'is_admin' => true,
            'password' => Hash::make('admin'),
            'paket_program' => 'null',
            'ktp_kk' => 'null',
        ]);
    }
}