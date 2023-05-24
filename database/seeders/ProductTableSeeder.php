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
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_dunk.webp'],

            [ 'name'=> 'Nike Air Max',
            'price'=> 139.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_airmax95.webp'],

            [ 'name'=> 'Nike Dunk High',
            'price'=> 149.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_dunk_high.webp'],

            [ 'name'=> 'Nike TN',
            'price'=> 129.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_tn.webp'],

            ['name'=> 'Nike Air Force',
            'price'=> 119.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_airforce.webp'],

            ['name'=> 'Nike Air Jordan',
            'price'=> 109.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_airjordan.webp'],

            ['name'=> 'Nike Blazer',
            'price'=> 104.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_blazer.webp'],

            ['name'=> 'Nike Pegasus',
            'price'=> 89.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_pegasus.webp'],

            ['name'=> 'Nike Dunk',
            'price'=> 99.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_dunk.webp'],

            [ 'name'=> 'Nike Air Max',
            'price'=> 139.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_airmax95.webp'],

            [ 'name'=> 'Nike Dunk High',
            'price'=> 149.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_dunk_high.webp'],

            [ 'name'=> 'Nike TN',
            'price'=> 129.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_tn.webp'],

            ['name'=> 'Nike Air Force',
            'price'=> 119.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_airforce.webp'],

            ['name'=> 'Nike Air Jordan',
            'price'=> 109.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_airjordan.webp'],

            ['name'=> 'Nike Blazer',
            'price'=> 104.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_blazer.webp'],

            ['name'=> 'Nike Pegasus',
            'price'=> 89.99,
            'detail'=> "La Nike Dunk est une paire de baskets conçue à l'origine pour la pratique du basketball. La structure de la Nike Dunk n'a que très peu changé depuis ses débuts difficiles en 1985. ",
            'img'=> 'nike_pegasus.webp']
          ]

        );
    }
}
