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
        $roles = ['member', 'admin'];
        $role = [
        	'member' => null,
        	'admin' => null
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
