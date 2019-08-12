<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            user_roles::class,
            products_types::class,
            products_categories::class,
            Documents_type::class,
            UsersTableSeeder::class,
            UnitsMeasure::class,
            products::class,
            product_allerns::class,


        ]);

    }
}
