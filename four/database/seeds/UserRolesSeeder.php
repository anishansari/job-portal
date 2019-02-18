<?php

use Illuminate\Database\Seeder;
use App\Role;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $role_Admin=new App\Role;
           $role_Company=new App\Role;
           $role_User=new App\Role;
           
			$role_Admin->name='Admin';
        	$role_Admin->save();
         
        	 $role_Company->name='Company';
        	$role_Company->save();

       		 $role_User->name='User';
        	$role_User->save();
        


    }
}
