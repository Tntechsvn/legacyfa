<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('permissions')->insert([
    		/*role*/
    		[
    			'name' => 'Show List Role',
    			'slug' => 'show-list-role',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Add New Role',
    			'slug' => 'add-new-role',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Edit Role',
    			'slug' => 'edit-role',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Delete Role',
    			'slug' => 'delete-role',
    			'created_at' => now()
    		],
    		/*user*/
    		[
    			'name' => 'Show List User',
    			'slug' => 'show-list-user',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Add New User',
    			'slug' => 'add-new-user',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Edit User',
    			'slug' => 'edit-user',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Delete User',
    			'slug' => 'delete-user',
    			'created_at' => now()
    		],
    		/*category plan*/
    		[
    			'name' => 'Show List Category Plan',
    			'slug' => 'show-list-category-plan',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Add New Category Plan',
    			'slug' => 'add-new-category-plan',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Edit Category Plan',
    			'slug' => 'edit-category-plan',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Delete Category Plan',
    			'slug' => 'delete-category-plan',
    			'created_at' => now()
    		],
    		/*company*/
    		[
    			'name' => 'Show List Company',
    			'slug' => 'show-list-company',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Add New Company',
    			'slug' => 'add-new-company',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Edit Company',
    			'slug' => 'edit-company',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Delete Company',
    			'slug' => 'delete-company',
    			'created_at' => now()
    		],
    		/*rider*/
    		[
    			'name' => 'Show List Rider',
    			'slug' => 'show-list-rider',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Add New Rider',
    			'slug' => 'add-new-rider',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Edit Rider',
    			'slug' => 'edit-rider',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Delete Rider',
    			'slug' => 'delete-rider',
    			'created_at' => now()
    		],
    		/*risk*/
    		[
    			'name' => 'Show List Risk',
    			'slug' => 'show-list-risk',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Add New Risk',
    			'slug' => 'add-new-risk',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Edit Risk',
    			'slug' => 'edit-risk',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Delete Risk',
    			'slug' => 'delete-risk',
    			'created_at' => now()
    		],
    		/*benifit*/
    		[
    			'name' => 'Show List Benifit',
    			'slug' => 'show-list-benifit',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Add New Benifit',
    			'slug' => 'add-new-benifit',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Edit Benifit',
    			'slug' => 'edit-benifit',
    			'created_at' => now()
    		],
    		[
    			'name' => 'Delete Benifit',
    			'slug' => 'delete-benifit',
    			'created_at' => now()
    		],
    	]);
    }
}
