<?php

use Illuminate\Database\Seeder;
use App\Models\UserRole\UserRole;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = UserRole::create([
        	'name' => 'student'
        ]);

        $userRole = UserRole::create([
        	'name' => 'admin'
        ]);
    }
}
