<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(
          [
            ['name'=> 'Nike Dunk',
            'price'=> 99.99,
            'img'=> 'img/nike_dunk.webp'],

            [ 'name'=> 'Nike Air Max',
            'price'=> 139.99,
            'img'=> 'img/nike_airmax95.webp'],

            [ 'name'=> 'Nike Dunk High',
            'price'=> 149.99,
            'img'=> 'img/nike_dunk_high.webp'],

            [ 'name'=> 'Nike TN',
            'price'=> 129.99,
            'img'=> 'img/nike_tn.webp'],

            ['name'=> 'Nike Air Force',
            'price'=> 119.99,
            'img'=> 'img/nike_airforce.webp'],

            ['name'=> 'Nike Air Jordan',
            'price'=> 109.99,
            'img'=> 'img/nike_airjordan.webp'],

            ['name'=> 'Nike Blazer',
            'price'=> 104.99,
            'img'=> 'img/nike_blazer.webp'],

            ['name'=> 'Nike Pegasus',
            'price'=> 89.99,
            'img'=> 'img/nike_pegasus.web']
          ]

        );
    }
}
