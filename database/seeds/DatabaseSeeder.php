<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(UserTabelSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(CategoryPlanTableSeeder::class);
        $this->call(PlanTableSeeder::class);
        $this->call(RiderTableSeeder::class);
        $this->call(PlanRiderTableSeeder::class);
        $this->call(BenifitTableSeeder::class);
        $this->call(RiskTableSeeder::class);
        $this->call(PrfTabelSeeder::class);
        $this->call(ClientTabelSeeder::class);
    }
}
