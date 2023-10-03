<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ModsTableSeeder extends Seeder
{

    public function run()
    {
        $mods = [
            ['title' => 'Advanced Peripherals', 'creator' => 'srrendi', 'version' => '1.20.1', 'created_at' => now()],
            ['title' => 'Create', 'creator' => 'simibubi', 'version' => '1.20.1', 'created_at' => now()],
            ['title' => 'Ars Nouveau', 'creator' => 'baileyholl2 , Gootastic', 'version' => '1.20.1', 'created_at' => now()],


        ];

        foreach ($mods as $mod) {
            DB::table('mods')->insert($mod);
        }
    }
}
