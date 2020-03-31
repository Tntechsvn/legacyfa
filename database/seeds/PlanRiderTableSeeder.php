<?php

use Illuminate\Database\Seeder;

class PlanRiderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\PlanRider::class, 30)->create();
    }
}
