<?php

use Illuminate\Database\Seeder;

class BenifitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Benifit::class, 30)->create();
    }
}
