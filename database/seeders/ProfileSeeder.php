<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profile')->insert([
            'nama' => 'Miko Yusrizal Fahreza',
            'nim' => '2141720083',
            'kelas' => 'TI-2H',
            'jurusan' => 'Teknologi Informasi',
            'nomorAbsen' => '17'
        ]);
    }
}
