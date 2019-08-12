<?php

use Illuminate\Database\Seeder;

class UnitsMeasure extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units_measure')->insert([
            'unit' => 'Meter (M)'
        ]);

        DB::table('units_measure')->insert([
            'unit' => 'KiloMeter (Km)'
        ]);
        DB::table('units_measure')->insert([
            'unit' => 'Kilogram (kg)'
        ]);
        DB::table('units_measure')->insert([
            'unit' => 'Mole (mol)'
        ]);
        DB::table('units_measure')->insert([
            'unit' => 'Meter'
        ]);

    }
}
