<?php

use Illuminate\Database\Seeder;

class ClientAaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\ClientAa::class, 20)->create();
    }
}
