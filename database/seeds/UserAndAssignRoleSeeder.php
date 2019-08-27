<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class UserAndAssignRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('email', 'member@gmail.com')->exists()) {
            $user3 = new User();
            $user3->name = 'Rakanda W';
            $user3->email = 'member@gmail.com';
            $user3->password = bcrypt('member');
            $user3->save(); 
            $user3->assignRole('member');
        }
          if (!User::where('email', 'admin1@gmail.com')->exists()) {
            $user3 = new User();
            $user3->name = 'Admin';
            $user3->email = 'admin1@gmail.com';
            $user3->password = bcrypt('admin2');
            $user3->save(); 
            $user3->assignRole('admin');
        }


    }
}
