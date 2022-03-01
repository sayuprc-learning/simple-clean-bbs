<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BbsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bbses')->insert([
            ['name' => '掲示板 1'],
            ['name' => '掲示板 2'],
            ['name' => '掲示板 3'],
            ['name' => '掲示板 4'],
            ['name' => '掲示板 5'],
            ['name' => '掲示板 6'],
            ['name' => '掲示板 7'],
            ['name' => '掲示板 8'],
            ['name' => '掲示板 9'],
            ['name' => '掲示板 10'],
        ]);
    }
}
