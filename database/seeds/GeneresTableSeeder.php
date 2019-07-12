<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generes')->insert([
            ['name' => 'Femenino'],
            ['name' => 'Masculino'],
            ]
        );
    }
}
