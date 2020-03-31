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
                'level' => 0,
    			'created_at' => now()
    		],
    		[
    			'name' => 'Agency',
                'level' => 1,
    			'created_at' => now()
    		]
    	]);
    }
}
