<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$role = new Role();
		    $role->name = 'admin';
		    $role->desc = 'Admin User';
		    $role->save();

		    $role = new Role();
		    $role->name = 'judge';
		    $role->desc = 'Judge User';
		    $role->save();

		    $role = new Role();
		    $role->name = 'moderator';
		    $role->desc = 'Publishes images';
		    $role->save();

		    $role = new Role();
		    $role->name = 'other';
		    $role->desc = 'Like and upload images';
		    $role->save();

    }
}
