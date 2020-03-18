<?php

use Illuminate\Database\Seeder;

class UserTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		[
    			'email' => 'admin@gmail.com',
    			'full_name' => 'Admin Legacy',
                'email_verified_at' => now(),
    			'password' => bcrypt('123456'),
    			'referred_name' => 'Admin',
    			'role_id' => 1,
                'status' => 0,
                'created_at' => now()
    		]
    	]);
    }
}
