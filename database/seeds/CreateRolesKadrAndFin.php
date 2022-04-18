<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;
use App\User;

class CreateRolesKadrAndFin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $adminUser = User::create([
            'name'     => 'Human Resources Department',
            'email'    => 'human_resources_department@site.com',
            'password' => bcrypt('password'),
        ]);

        $testUser = User::create([
            'name'     => 'Financial Department',
            'email'    => 'financial_department@site.com',
            'password' => bcrypt('password'),
        ]);
        
        $adminRole = Role::create([
            'name'  => 'hum-res-department',
            'display_name' => 'Human Resources Department'
        ]);

        $managerRole = Role::create([
            'name'  => 'fin-department',
            'display_name' => 'Financial Department'
        ]);
        
        $adminUser->roles()->attach($adminRole);
        $testUser->roles()->attach($managerRole);
    }
}
