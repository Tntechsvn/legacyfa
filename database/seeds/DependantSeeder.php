<?php

use Illuminate\Database\Seeder;

class DependantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Dependant::class, 50)->create();
    }
}
