<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'しょうゆラーメン',
                'memo' => '海苔、味玉トッピング付き',
                'price' => 1200,
            ],
            [
                'name' => '味噌ラーメン',
                'memo' => '厳選した味噌を3種類ブレンド',
                'price' => 1400,
            ],
            [
                'name' => '塩ラーメン',
                'memo' => 'あっさりスープと魚介のうまみ',
                'price' => 1100,
            ],
        ]);
    }
}
