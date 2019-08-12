<?php

use Illuminate\Database\Seeder;

class product_allerns extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_allergens')->insert([
            'allergens_name' => 'milk',
            'product_id' => ''
        ]);
        DB::table('product_allergens')->insert([
            'allergens_name' => 'eggs',
            'product_id' => ''
        ]);
        DB::table('product_allergens')->insert([
            'allergens_name' => 'fish',
            'product_id' => ''
        ]);
        DB::table('product_allergens')->insert([
            'allergens_name' => 'crustacean',
            'product_id' => ''
        ]);
        DB::table('product_allergens')->insert([
            'allergens_name' => 'shellfish',
            'product_id' => ''
        ]);
        DB::table('product_allergens')->insert([
            'allergens_name' => 'tree'
        ]);
        DB::table('product_allergens')->insert([
            'allergens_name' => 'nuts',
            'product_id' => ''
        ]);
        DB::table('product_allergens')->insert([
            'allergens_name' => 'peanuts',
            'product_id' => ''
        ]);
        DB::table('product_allergens')->insert([
            'allergens_name' => 'wheat',
            'product_id' => ''
        ]);
        DB::table('product_allergens')->insert([
            'allergens_name' => 'soybean',
            'product_id' => ''
        ]);

    }
}
