<?php

use Illuminate\Database\Seeder;

class PrfTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Pfr::class, 30)->create();
    }
}
