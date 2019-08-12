<?php

use Illuminate\Database\Seeder;

class Documents_type extends Seeder
{

    public function run()
    {

        DB::table('documents_type')->insert([
            'level' => '0',
            'name' => 'ID Copy'
        ]);
        DB::table('documents_type')->insert([
            'level' => '1',
            'name' => 'Proof of Address'
        ]);
        DB::table('documents_type')->insert([
            'level' => '2',
            'name' => 'Food Business Reg'
        ]);
        DB::table('documents_type')->insert([
            'level' => '3',
            'name' => 'Licence'
        ]);


    }

}
