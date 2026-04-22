<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'address'=>'jawa',
            'nomor_tlp'=>'08xxxxxxx',
            'ttl'=>'2000-11-26',
            'foto'=>'picture.png'
        ]);
    }
}
