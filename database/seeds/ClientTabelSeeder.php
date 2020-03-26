<?php

use Illuminate\Database\Seeder;

class ClientTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Client::class, 30)->create();
    }
}
