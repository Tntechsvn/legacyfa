<?php

use Illuminate\Database\Seeder;

class RiskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Risk::class, 30)->create();
    }
}
