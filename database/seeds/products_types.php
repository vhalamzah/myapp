<?php

use Illuminate\Database\Seeder;

class products_types extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //
        DB::table('products_types')->insert([
            'level' => '0',
            'name' => 'Break Fast'
        ]);
        DB::table('products_types')->insert([
            'level' => '1',
            'name' => 'Lunch'
        ]);
        DB::table('products_types')->insert([
            'level' => '2',
            'name' => 'Dinner'
        ]);
        DB::table('products_types')->insert([
            'level' => '3',
            'name' => 'delivery'
        ]);

    }
}
