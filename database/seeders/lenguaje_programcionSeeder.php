<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class lenguaje_programcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\lenguaje_programcion::factory(100)->create();
    }
}
