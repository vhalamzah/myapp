<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'cell' => '12345678',
            'user_role' => 1,
            'password' => bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'cell' => '277123456789',
            'user_role' => 2,
            'password' =>  bcrypt('12345678'),
        ]);

        //Chefs
        DB::table('users')->insert([
            'name' => 'Emannuel',
            'email' => 'emmanuel@gmail.com',
            'cell' => '123485678',
            'user_role' => 3,
            'password' => bcrypt('12345678'),
            'profile_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQR5MGOHogdjCUq_at5h0Aku9qUY7ib6mEqahy2Gvp6UP86Z-wR7w',
        ]);
        DB::table('users')->insert([
            'name' => 'Mark Ferone',
            'email' => 'mark@gmail.com',
            'cell' => '123485678',
            'user_role' => 3,
            'password' => bcrypt('12345678'),
        ]);
        DB::table('users')->insert([
            'name' => 'Jose Mejia',
            'email' => 'jose@gmail.com',
            'cell' => '123485678',
            'user_role' => 3,
            'password' => bcrypt('12345678'),
        ]);







        //Delivery

        DB::table('users')->insert([
            'name' => 'Delivery',
            'email' => 'delivery@gmail.com',
            'cell' => '1239745678',
            'user_role' => 4,
            'password' =>  bcrypt('12345678'),
        ]);




    }
}
