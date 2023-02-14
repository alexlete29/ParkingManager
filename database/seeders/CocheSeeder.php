<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coche')->insert([
            'matricula'=>'8378GSK',
            'marca'=>'Peugeot',
            'modelo'=>'308',
        ]);
    }
}
