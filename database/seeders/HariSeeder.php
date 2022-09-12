<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hari;
use DB;
class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hari = [
            ['id'=>1,'nama_hari_en' => 'monday', 'nama_hari_id' => 'senin'],
            ['id'=>2,'nama_hari_en' => 'tuesday', 'nama_hari_id' => 'selasa'],
            ['id'=>3,'nama_hari_en' => 'wednesday', 'nama_hari_id' => 'rabu'],
            ['id'=>4,'nama_hari_en' => 'thursday', 'nama_hari_id' => 'kamis'],
            ['id'=>5,'nama_hari_en' => 'friday', 'nama_hari_id' => 'jumat'],
            ['id'=>6,'nama_hari_en' => 'saturday', 'nama_hari_id' => 'sabtu'],
            ['id'=>7,'nama_hari_en' => 'sunday', 'nama_hari_id' => 'minggu'],
        ];
        Hari::insert($hari);
    }
}
