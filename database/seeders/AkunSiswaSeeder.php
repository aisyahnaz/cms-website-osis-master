<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AkunSiswa;

class AkunSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AkunSiswa::insert([
            [
                'nisn_siswa' => '0053279904',
                'nama_siswa' => 'Rizky Novan Aditiya',
                'tahun_ajaran' => '2020',
                'email_siswa' => 'rizkynovan@gmail.com',
                'password_siswa' => bcrypt('skomda20'),
            ],
            [
                'nisn_siswa' => '004060680',
                'nama_siswa' => 'Aisyah Nur Azizah',
                'tahun_ajaran' => '2020',
                'email_siswa' => 'aisyahnaz18@gmail.com',
                'password_siswa' => bcrypt('skomda20'),
            ],
            [
                'nisn_siswa' => '0042321115',
                'nama_siswa' => 'Sylva Anasabilla Juliarta',
                'tahun_ajaran' => '2020',
                'email_siswa' => 'sylvaanisabilla@gmail.com',
                'password_siswa' => bcrypt('skomda20'),
            ],

        ]);
    }
}
