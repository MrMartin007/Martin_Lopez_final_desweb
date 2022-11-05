<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class criptomonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\criptomoneda::factory(100)->create();
    }
}
