<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('permission_role')->insert([
    		/*role*/
    		[
    			'permission_id' => 1,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 2,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 3,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 4,
    			'role_id' => 1
    		],
    		/*user*/
    		[
    			'permission_id' => 5,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 6,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 7,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 8,
    			'role_id' => 1
    		],
    		/*category plan*/
    		[
    			'permission_id' => 9,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 10,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 11,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 12,
    			'role_id' => 1
    		],
    		/*company*/
    		[
    			'permission_id' => 13,
    			'role_id' => 1
    		],

    		[
    			'permission_id' => 14,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 15,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 16,
    			'role_id' => 1
    		],
    		/*rider*/
    		[
    			'permission_id' => 17,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 18,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 19,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 20,
    			'role_id' => 1
    		],
    		/*risk*/
    		[
    			'permission_id' => 21,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 22,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 23,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 24,
    			'role_id' => 1
    		],
    		/*benifit*/
    		[
    			'permission_id' => 25,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 26,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 27,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 28,
    			'role_id' => 1
    		],

    		/*[
    			'permission_id' => 29,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 30,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 31,
    			'role_id' => 1
    		],
    		[
    			'permission_id' => 32,
    			'role_id' => 1
    		],*/
    	]);
    }
}
