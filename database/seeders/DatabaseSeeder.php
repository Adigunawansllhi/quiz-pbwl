<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'          => 'Adi gunawan',
            'user_alamat'   => 'Sibolga',
            'user_hp'       => '085260787132',
            'user_pos'      => '22533',
            'user_role'     => '1',
            'user_aktif'    => '1',
            'email'         => 'admin@gmail.com',
            'password'      => Hash::make('admin'),
        ]);
    }
}
