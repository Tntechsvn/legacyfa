<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('roles')->insert([
    		[
    			'name' => 'Supper Admin',
    			'created_at' => now()
    		],
    		[
    			'name' => 'agency',
    			'created_at' => now()
    		]
    	]);
    }
}
