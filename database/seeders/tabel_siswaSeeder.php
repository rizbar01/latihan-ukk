<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tabel_siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tabel_siswa')->insert([
            'nama' => 'nama',
            'alamat' => 'alamat',
            'jenis_kelamin' => 'jenis_kelamin',
            'sekolah' => 'sekolah']);
    }
}
