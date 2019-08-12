<?php

use Illuminate\Database\Seeder;

class user_roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_roles')->insert([
            'level' => '0',
            'name' => 'admin'
        ]);
        DB::table('user_roles')->insert([
            'level' => '1',
            'name' => 'user'
        ]);
        DB::table('user_roles')->insert([
            'level' => '2',
            'name' => 'chef'
        ]);
        DB::table('user_roles')->insert([
            'level' => '3',
            'name' => 'delivery'
        ]);
        DB::table('user_roles')->insert([
            'level' => '4',
            'name' => 'chef_delivery'
        ]);


    }
}
