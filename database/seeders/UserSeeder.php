<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name'             => 'Administrator',
                'nip'              => '00001',
                'email'            => 'admin@yoleave.com',
                'password'         => Hash::make('password'),
                'role'             => 'admin',
                'status_karyawan'  => 'Karyawan Tetap',
                'jenis_kelamin'    => 'Laki-Laki',
                'divisi'           => 'IT',
                'created_at'       => now(),
                'updated_at'       => now(),
            ]
        ];

        DB::table('users')->insert($users);
    }
}