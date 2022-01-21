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
            'email' => 'user@pkbm.com',
            'password' => Hash::make('user'),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@pkbm.com',
            'is_admin' => true,
            'password' => Hash::make('admin'),
        ]);
    }
}