<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin', 'member'];
        $role = [
        	'admin' => null,
        	'member' => null
        ];

        // Seed Role Data
        foreach ($roles as $value) {
        	if( !Role::where('name',$value)->exists() )
        		$role[$value] = Role::create(['name' => $value]);
        	else
        		$role[$value] = Role::findByName($value);
        }
    }
}
