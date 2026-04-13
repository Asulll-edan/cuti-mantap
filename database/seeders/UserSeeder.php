<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('user')->insert([
            'nama' => 'Administrator',
            'nip' => '00001',
            'email' => 'admin@yoleave.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'jenis_kelamin' => 'Laki-laki',
            'status_karyawan' => 'Tetap',
            'tgl_masuk' => now(),
            'is_active' => true,
            'created_at' => now(),
        ]);
    }
}