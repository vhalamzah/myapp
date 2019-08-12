<?php

use Illuminate\Database\Seeder;

class products_categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products_categories')->insert([
            'level' => '0',
            'name' => 'Recipe'
        ]);
        DB::table('products_categories')->insert([
            'level' => '1',
            'name' => 'Sides'
        ]);
        DB::table('products_categories')->insert([
            'level' => '2',
            'name' => 'Desserts'
        ]);
        DB::table('products_categories')->insert([
            'level' => '3',
            'name' => 'Drink'
        ]);
        DB::table('products_categories')->insert([
            'level' => '4',
            'name' => 'Beverage'
        ]);



    }
}
