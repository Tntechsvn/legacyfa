<?php

use Illuminate\Database\Seeder;

class CategoryPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\CategoryPlan::class, 20)->create();
    }
}
